@extends('layouts.app')
@section('title', 'Pago Cancelado')
@section('content')

<section class="payment-cancel" style="min-height: 60vh; display: flex; align-items: center; justify-content: center; padding: 4rem 1rem;">
    <div class="payment-cancel__container --max-width" style="max-width: 600px; text-align: center;">
        <div class="payment-cancel__icon" style="margin-bottom: 2rem;">
            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0 auto;">
                <circle cx="50" cy="50" r="50" fill="#ff9800"/>
                <path d="M35 35L65 65M65 35L35 65" stroke="white" stroke-width="6" stroke-linecap="round"/>
            </svg>
        </div>
        
        <h1 style="font-size: 2.5rem; color: #333; margin-bottom: 1rem;">Pago Cancelado</h1>
        <p style="font-size: 1.2rem; color: #666; margin-bottom: 2rem;">
            Has cancelado el proceso de pago. Tu reserva no ha sido confirmada.
        </p>

        @if($booking)
        <div class="booking-info" style="background: #fff3e0; padding: 2rem; border-radius: 10px; margin-bottom: 2rem; text-align: left;">
            <h2 style="font-size: 1.3rem; color: #333; margin-bottom: 1rem; text-align: center;">Información de la Reserva</h2>
            
            <div style="margin-bottom: 0.8rem;">
                <strong style="color: #555;">Número de Reserva:</strong> 
                <span style="color: #333;">#{{ $booking->id }}</span>
            </div>
            
            <div style="margin-bottom: 0.8rem;">
                <strong style="color: #555;">Habitación:</strong> 
                <span style="color: #333;">{{ $booking->room->room_type ?? 'N/A' }}</span>
            </div>
            
            <div style="margin-bottom: 0.8rem;">
                <strong style="color: #555;">Check-in:</strong> 
                <span style="color: #333;">{{ $booking->checkIn->format('d/m/Y') }}</span>
            </div>
            
            <div style="margin-bottom: 0.8rem;">
                <strong style="color: #555;">Check-out:</strong> 
                <span style="color: #333;">{{ $booking->checkOut->format('d/m/Y') }}</span>
            </div>
            
            <div style="margin-bottom: 0.8rem;">
                <strong style="color: #555;">Monto:</strong> 
                <span style="color: #333;">${{ number_format($booking->amount, 2) }} {{ strtoupper($booking->currency) }}</span>
            </div>
            
            <div style="margin-top: 1.5rem; padding: 1rem; background: white; border-radius: 5px;">
                <p style="color: #f57c00; margin: 0; font-size: 0.95rem;">
                    <strong>⚠️ Importante:</strong> Tu reserva aún está pendiente de pago. Puedes intentar pagar nuevamente haciendo clic en el botón de abajo.
                </p>
            </div>
        </div>

        <div class="payment-cancel__actions" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('payment.checkout', $booking->id) }}" class="button upper__case" style="text-decoration: none; padding: 1rem 2rem; background: #4CAF50; color: white; border-radius: 5px; display: inline-block;">
                Intentar Pago Nuevamente
            </a>
            <a href="{{ route('rooms') }}" class="button upper__case" style="text-decoration: none; padding: 1rem 2rem; background: #BEAD8E; color: white; border-radius: 5px; display: inline-block;">
                Ver Otras Habitaciones
            </a>
        </div>
        @else
        <div class="payment-cancel__actions" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('home') }}" class="button upper__case" style="text-decoration: none; padding: 1rem 2rem; background: #BEAD8E; color: white; border-radius: 5px; display: inline-block;">
                Volver al Inicio
            </a>
            <a href="{{ route('rooms') }}" class="button upper__case" style="text-decoration: none; padding: 1rem 2rem; background: #333; color: white; border-radius: 5px; display: inline-block;">
                Ver Habitaciones
            </a>
        </div>
        @endif
    </div>
</section>

@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof toastr !== 'undefined') {
            toastr.warning('El pago ha sido cancelado.', {
                timeOut: 5000,
            });
        }
    });
</script>
@endsection

