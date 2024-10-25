<h1>Detalles de la Reserva</h1>

<p>Usuario: {{ $booking->user->name }}</p>
<p>Habitación: {{ $booking->room->name }}</p>
<p>Fecha: {{ $booking->date }}</p>

<a href="{{ route('bookings.index') }}">Volver a la lista</a>

