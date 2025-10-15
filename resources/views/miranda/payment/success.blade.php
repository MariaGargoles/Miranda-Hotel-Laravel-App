@extends('layouts.app')
@section('title', 'Pago Exitoso')
@section('content')

<section class="payment-success" style="min-height: 60vh; display: flex; align-items: center; justify-content: center; padding: 4rem 1rem;">
    <div class="payment-success__container --max-width" style="max-width: 600px; text-align: center;">
        <div class="payment-success__icon" style="margin-bottom: 2rem;">
            <svg width="100" height="100" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin: 0 auto;">
                <circle cx="50" cy="50" r="50" fill="#4CAF50"/>
                <path d="M30 50L45 65L70 35" stroke="white" stroke-width="6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
        
        <h1 style="font-size: 2.5rem; color: #333; margin-bottom: 1rem;">¡Pago Exitoso!</h1>
        <p style="font-size: 1.2rem; color: #666; margin-bottom: 2rem;">
            Tu reserva ha sido confirmada y el pago se ha procesado correctamente.
        </p>

        @if($booking)
        <div class="booking-details" style="background: #f5f5f5; padding: 2rem; border-radius: 10px; margin-bottom: 2rem; text-align: left;">
            <h2 style="font-size: 1.5rem; color: #333; margin-bottom: 1rem; text-align: center;">Detalles de la Reserva</h2>
            
            <div style="margin-bottom: 0.8rem;">
                <strong style="color: #555;">Número de Reserva:</strong> 
                <span style="color: #333;">#{{ $booking->id }}</span>
            </div>
            
            <div style="margin-bottom: 0.8rem;">
                <strong style="color: #555;">Habitación:</strong> 
                <span style="color: #333;">{{ $booking->room->room_type ?? 'N/A' }}</span>
            </div>
            
            <div style="margin-bottom: 0.8rem;">
                <strong style="color: #555;">Nombre:</strong> 
                <span style="color: #333;">{{ $booking->fullName }}</span>
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
                <strong style="color: #555;">Monto Pagado:</strong> 
                <span style="color: #4CAF50; font-size: 1.3rem; font-weight: bold;">${{ number_format($booking->amount, 2) }} {{ strtoupper($booking->currency) }}</span>
            </div>
            
            <div style="margin-bottom: 0.8rem;">
                <strong style="color: #555;">Estado de Pago:</strong> 
                <span style="color: #4CAF50; font-weight: bold;">✓ Pagado</span>
            </div>
        </div>

        <div class="payment-success__info" style="background: #e3f2fd; padding: 1.5rem; border-radius: 8px; margin-bottom: 2rem;">
            <p style="color: #1976d2; font-size: 0.95rem; margin: 0;">
                <strong>📧 Confirmación Enviada:</strong> Hemos enviado un correo de confirmación a <strong>{{ $booking->email }}</strong> con todos los detalles de tu reserva.
            </p>
        </div>
        @endif

        <div class="payment-success__actions" style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
            <a href="{{ route('home') }}" class="button upper__case" style="text-decoration: none; padding: 1rem 2rem; background: #BEAD8E; color: white; border-radius: 5px; display: inline-block;">
                Volver al Inicio
            </a>
            <a href="{{ route('rooms') }}" class="button upper__case" style="text-decoration: none; padding: 1rem 2rem; background: #333; color: white; border-radius: 5px; display: inline-block;">
                Ver Más Habitaciones
            </a>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<script>
    // Mostrar notificación de éxito
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof toastr !== 'undefined') {
            toastr.success('¡Tu reserva ha sido confirmada exitosamente!', {
                timeOut: 5000,
            });
        }
    });
</script>
@endsection

