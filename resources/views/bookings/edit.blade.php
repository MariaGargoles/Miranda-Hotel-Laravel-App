<h1>Editar Reserva</h1>

<form action="{{ route('bookings.update', $booking->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="room_id">ID de Habitación:</label>
    <input type="number" name="room_id" value="{{ $booking->room_id }}" required>

    <label for="user_id">ID de Usuario:</label>
    <input type="number" name="user_id" value="{{ $booking->user_id }}" required>

    <label for="date">Fecha:</label>
    <input type="date" name="date" value="{{ $booking->date }}" required>

    <button type="submit">Actualizar Reserva</button>
</form>

<a href="{{ route('bookings.index') }}">Volver a la lista</a>

