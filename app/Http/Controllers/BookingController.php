<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request, $id)
    {
        $request->validate([
            'checkIn' => 'required|date|after_or_equal:today',
            'checkOut' => 'required|date|after:checkIn',
            'fullName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'specialRequest' => 'nullable|string|max:500',
        ]);

        $checkIn = $request->input('checkIn');
        $checkOut = $request->input('checkOut');
        $room_id = $id;
        $room = Room::find($room_id);

        if (!$room) {
            return redirect()->back()->with('error', 'La habitación no existe.');
        }

        // Verificar disponibilidad
        if (!$room->available($checkIn, $checkOut)->exists()) {
            return redirect()->back()->with('error', 'La habitación no está disponible en esas fechas.');
        }

        // Crear la reserva
        $booking = Booking::create([
            'fullName' => $request->input('fullName'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'checkIn' => $checkIn,
            'checkOut' => $checkOut,
            'room_id' => $room_id,
            'status' => 'In progress',
            'bookDate' => now(),
            'specialRequest' => $request->input('specialRequest'),
            'payment_status' => 'pending',
            'currency' => config('stripe.currency', 'usd'),
        ]);

        // Calcular el monto total
        $amount = $booking->calculateAmount();
        $booking->update(['amount' => $amount]);

        // Redirigir al proceso de pago
        return redirect()->route('payment.checkout', $booking->id)
            ->with('success', 'Reserva creada. Por favor, completa el pago para confirmar.');
    }

    /**
     * Show booking details
     */
    public function show($id)
    {
        $booking = Booking::with('room')->findOrFail($id);
        return view('miranda.booking.show', compact('booking'));
    }
}
