<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;

class PaymentController extends Controller
{
    public function __construct()
    {
        Stripe::setApiKey(config('stripe.secret_key'));
    }

    /**
     * Create a Stripe Checkout Session
     */
    public function createCheckoutSession(Request $request, $bookingId)
    {
        try {
            $booking = Booking::with('room')->findOrFail($bookingId);

            // Calculate amount if not already set
            if (!$booking->amount) {
                $amount = $booking->calculateAmount();
                $booking->update(['amount' => $amount]);
            }

            // Create Stripe Checkout Session
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => config('stripe.currency'),
                        'unit_amount' => $booking->amount * 100, // Stripe works with cents
                        'product_data' => [
                            'name' => 'Reserva de Habitación - ' . $booking->room->room_type,
                            'description' => 'Check-in: ' . $booking->checkIn->format('d/m/Y') . 
                                           ' | Check-out: ' . $booking->checkOut->format('d/m/Y'),
                            'images' => [$booking->room->photo_url ?? asset('assets/img/luxury-room.jpg')],
                        ],
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route('payment.success') . '?session_id={CHECKOUT_SESSION_ID}',
                'cancel_url' => route('payment.cancel') . '?booking_id=' . $booking->id,
                'client_reference_id' => $booking->id,
                'customer_email' => $booking->email,
                'metadata' => [
                    'booking_id' => $booking->id,
                ],
            ]);

            // Update booking with session ID
            $booking->update([
                'stripe_session_id' => $session->id,
                'payment_status' => 'processing',
            ]);

            return redirect($session->url);

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error al procesar el pago: ' . $e->getMessage());
        }
    }

    /**
     * Handle successful payment
     */
    public function success(Request $request)
    {
        try {
            $sessionId = $request->query('session_id');
            
            if (!$sessionId) {
                return redirect()->route('home')->with('error', 'Sesión de pago no encontrada.');
            }

            $session = Session::retrieve($sessionId);
            $booking = Booking::where('stripe_session_id', $sessionId)->first();

            if (!$booking) {
                return redirect()->route('home')->with('error', 'Reserva no encontrada.');
            }

            // Update booking payment status
            if ($session->payment_status === 'paid') {
                $booking->update([
                    'payment_status' => 'succeeded',
                    'stripe_payment_intent_id' => $session->payment_intent,
                    'paid_at' => now(),
                ]);
            }

            return view('miranda.payment.success', compact('booking'));

        } catch (\Exception $e) {
            return redirect()->route('home')->with('error', 'Error al verificar el pago: ' . $e->getMessage());
        }
    }

    /**
     * Handle canceled payment
     */
    public function cancel(Request $request)
    {
        $bookingId = $request->query('booking_id');
        $booking = null;

        if ($bookingId) {
            $booking = Booking::find($bookingId);
            if ($booking) {
                $booking->update(['payment_status' => 'canceled']);
            }
        }

        return view('miranda.payment.cancel', compact('booking'));
    }

    /**
     * Handle Stripe Webhooks
     */
    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');
        $webhookSecret = config('stripe.webhook_secret');

        try {
            $event = Webhook::constructEvent($payload, $sigHeader, $webhookSecret);
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            return response()->json(['error' => 'Invalid payload'], 400);
        } catch (SignatureVerificationException $e) {
            // Invalid signature
            return response()->json(['error' => 'Invalid signature'], 400);
        }

        // Handle the event
        switch ($event->type) {
            case 'checkout.session.completed':
                $session = $event->data->object;
                $this->handleCheckoutSessionCompleted($session);
                break;

            case 'payment_intent.succeeded':
                $paymentIntent = $event->data->object;
                $this->handlePaymentIntentSucceeded($paymentIntent);
                break;

            case 'payment_intent.payment_failed':
                $paymentIntent = $event->data->object;
                $this->handlePaymentIntentFailed($paymentIntent);
                break;

            default:
                // Unexpected event type
                return response()->json(['error' => 'Unexpected event type'], 400);
        }

        return response()->json(['status' => 'success'], 200);
    }

    /**
     * Handle checkout session completed
     */
    protected function handleCheckoutSessionCompleted($session)
    {
        $booking = Booking::where('stripe_session_id', $session->id)->first();

        if ($booking && $session->payment_status === 'paid') {
            $booking->update([
                'payment_status' => 'succeeded',
                'stripe_payment_intent_id' => $session->payment_intent,
                'paid_at' => now(),
            ]);
        }
    }

    /**
     * Handle payment intent succeeded
     */
    protected function handlePaymentIntentSucceeded($paymentIntent)
    {
        $booking = Booking::where('stripe_payment_intent_id', $paymentIntent->id)->first();

        if ($booking) {
            $booking->update([
                'payment_status' => 'succeeded',
                'paid_at' => now(),
            ]);
        }
    }

    /**
     * Handle payment intent failed
     */
    protected function handlePaymentIntentFailed($paymentIntent)
    {
        $booking = Booking::where('stripe_payment_intent_id', $paymentIntent->id)->first();

        if ($booking) {
            $booking->update([
                'payment_status' => 'failed',
            ]);
        }
    }

    /**
     * Show payment status page
     */
    public function show($bookingId)
    {
        $booking = Booking::with('room')->findOrFail($bookingId);
        return view('miranda.payment.show', compact('booking'));
    }
}
