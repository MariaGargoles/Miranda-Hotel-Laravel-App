@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Activities List</h1>

    <!-- Botón para crear nueva actividad -->
    <div class="mb-3">
        <a href="{{ route('activities.create') }}" class="btn btn-primary">Create New Activity</a>
    </div>

    <!-- Mostrar mensaje de éxito si existe -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Verificar si existen actividades -->
    @if($activities->isEmpty())
        <p>No activities found.</p>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Notes</th>
                    <th>Paid</th>
                    <th>Satisfaction</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($activities as $activity)
                    <tr>
                        <td>{{ $activity->id }}</td>
                        <td>{{ $activity->type }}</td>
                        <td>{{ \Carbon\Carbon::parse($activity->dateTime)->format('d/m/Y H:i') }}</td>
                        <td>{{ $activity->notes }}</td>
                        <td>{{ $activity->paid ? 'Yes' : 'No' }}</td>
                        <td>{{ $activity->satisfaction ?? 'N/A' }}</td>
                        <td>
                            <!-- Botones de acción -->
                            <a href="{{ route('activities.show', $activity->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this activity?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
