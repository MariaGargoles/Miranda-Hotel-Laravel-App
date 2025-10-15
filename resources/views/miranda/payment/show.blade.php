@extends('layouts.app')
@section('title', 'Estado de Pago')
@section('content')

<section class="payment-status" style="min-height: 60vh; padding: 4rem 1rem;">
    <div class="payment-status__container --max-width" style="max-width: 800px; margin: 0 auto;">
        <h1 style="font-size: 2.5rem; color: #333; margin-bottom: 2rem; text-align: center;">Estado de Pago de Reserva</h1>

        <div class="booking-card" style="background: white; border-radius: 15px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); overflow: hidden;">
            @if($booking->room && $booking->room->photos->first())
            <div class="booking-card__image" style="width: 100%; height: 300px; background-image: url('{{ asset('storage/' . $booking->room->photos->first()->photo_url) }}'); background-size: cover; background-position: center;"></div>
            @endif

            <div class="booking-card__content" style="padding: 2rem;">
                <div class="payment-status-badge" style="display: inline-block; padding: 0.5rem 1.5rem; border-radius: 20px; margin-bottom: 1.5rem; font-weight: bold;
                    @if($booking->payment_status === 'succeeded') background: #4CAF50; color: white;
                    @elseif($booking->payment_status === 'processing') background: #2196F3; color: white;
                    @elseif($booking->payment_status === 'pending') background: #ff9800; color: white;
                    @elseif($booking->payment_status === 'failed') background: #f44336; color: white;
                    @else background: #9e9e9e; color: white;
                    @endif">
                    @if($booking->payment_status === 'succeeded')
                        ✓ Pago Exitoso
                    @elseif($booking->payment_status === 'processing')
                        ⏳ Procesando Pago
                    @elseif($booking->payment_status === 'pending')
                        ⌛ Pendiente de Pago
                    @elseif($booking->payment_status === 'failed')
                        ✗ Pago Fallido
                    @elseif($booking->payment_status === 'canceled')
                        ✗ Pago Cancelado
                    @else
                        Estado Desconocido
                    @endif
                </div>

                <div class="booking-details" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-bottom: 2rem;">
                    <div>
                        <h3 style="color: #BEAD8E; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem;">Número de Reserva</h3>
                        <p style="font-size: 1.2rem; color: #333; margin: 0;">#{{ $booking->id }}</p>
                    </div>

                    <div>
                        <h3 style="color: #BEAD8E; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem;">Habitación</h3>
                        <p style="font-size: 1.2rem; color: #333; margin: 0;">{{ $booking->room->room_type ?? 'N/A' }}</p>
                    </div>

                    <div>
                        <h3 style="color: #BEAD8E; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem;">Huésped</h3>
                        <p style="font-size: 1.2rem; color: #333; margin: 0;">{{ $booking->fullName }}</p>
                    </div>

                    <div>
                        <h3 style="color: #BEAD8E; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem;">Email</h3>
                        <p style="font-size: 1rem; color: #333; margin: 0;">{{ $booking->email }}</p>
                    </div>

                    <div>
                        <h3 style="color: #BEAD8E; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem;">Check-in</h3>
                        <p style="font-size: 1.2rem; color: #333; margin: 0;">{{ $booking->checkIn->format('d/m/Y') }}</p>
                    </div>

                    <div>
                        <h3 style="color: #BEAD8E; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem;">Check-out</h3>
                        <p style="font-size: 1.2rem; color: #333; margin: 0;">{{ $booking->checkOut->format('d/m/Y') }}</p>
                    </div>

                    <div>
                        <h3 style="color: #BEAD8E; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem;">Noches</h3>
                        <p style="font-size: 1.2rem; color: #333; margin: 0;">{{ $booking->checkIn->diffInDays($booking->checkOut) }}</p>
                    </div>

                    <div>
                        <h3 style="color: #BEAD8E; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem;">Monto Total</h3>
                        <p style="font-size: 1.5rem; color: #4CAF50; font-weight: bold; margin: 0;">${{ number_format($booking->amount, 2) }}</p>
                    </div>
                </div>

                @if($booking->specialRequest)
                <div style="background: #f5f5f5; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem;">
                    <h3 style="color: #BEAD8E; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem;">Solicitudes Especiales</h3>
                    <p style="color: #666; margin: 0;">{{ $booking->specialRequest }}</p>
                </div>
                @endif

                @if($booking->paid_at)
                <div style="background: #e8f5e9; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem;">
                    <h3 style="color: #4CAF50; font-size: 0.9rem; text-transform: uppercase; margin-bottom: 0.5rem;">✓ Pagado el</h3>
                    <p style="color: #2e7d32; font-weight: bold; margin: 0;">{{ $booking->paid_at->format('d/m/Y H:i:s') }}</p>
                </div>
                @endif

                <div class="payment-actions" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-top: 2rem;">
                    @if($booking->payment_status === 'pending' || $booking->payment_status === 'failed' || $booking->payment_status === 'canceled')
                    <a href="{{ route('payment.checkout', $booking->id) }}" class="button upper__case" style="text-decoration: none; padding: 1rem 2rem; background: #4CAF50; color: white; border-radius: 5px; display: inline-block;">
                        Proceder con el Pago
                    </a>
                    @endif
                    
                    <a href="{{ route('home') }}" class="button upper__case" style="text-decoration: none; padding: 1rem 2rem; background: #BEAD8E; color: white; border-radius: 5px; display: inline-block;">
                        Volver al Inicio
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

