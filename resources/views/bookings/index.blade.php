<h1>Lista de Reservas</h1>

<a href="{{ route('bookings.create') }}">Crear Nueva Reserva</a>

<ul>
    @foreach ($bookings as $booking)
        <li>
            {{ $booking->user->name }} reservó la habitación {{ $booking->room->name }} para {{ $booking->date }}
            <a href="{{ route('bookings.edit', $booking->id) }}">Editar</a>
            <a href="{{ route('bookings.show', $booking->id) }}">Ver Detalles</a>

            <form action="{{ route('bookings.destroy', $booking->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Eliminar</button>
            </form>
        </li>
    @endforeach
</ul>

