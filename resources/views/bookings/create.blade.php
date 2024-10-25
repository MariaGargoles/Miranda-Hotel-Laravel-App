<h1>Crear Nueva Reserva</h1>

<form action="{{ route('bookings.store') }}" method="POST">
    @csrf
    <label for="room_id">ID de Habitación:</label>
    <input type="number" name="room_id" required>

    <label for="user_id">ID de Usuario:</label>
    <input type="number" name="user_id" required>

    <label for="date">Fecha:</label>
    <input type="date" name="date" required>

    <button type="submit">Crear Reserva</button>
</form>

<a href="{{ route('bookings.index') }}">Volver a la lista</a>
