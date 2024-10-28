@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Activity Details</h1>

    <!-- Detalles de la actividad -->
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><strong>Type:</strong>{{ $activity->type }}</h5>
            <p class="card-text"><strong>Date:</strong> {{ \Carbon\Carbon::parse($activity->dateTime)->format('d/m/Y H:i') }}</p>
            <p class="card-text"><strong>Notes:</strong> {{ $activity->notes }}</p>
            <p class="card-text"><strong>Paid:</strong> {{ $activity->paid ? 'Yes' : 'No' }}</p>
            <p class="card-text"><strong>Satisfaction:</strong> {{ $activity->satisfaction ?? 'N/A' }}</p>
        </div>
    </div>

    <!-- Botones para editar o eliminar -->
    <div class="mt-3">
        <a href="{{ route('activities.edit', $activity->id) }}" class="btn btn-warning">Edit Activity</a>
        <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this activity?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Activity</button>
        </form>
        <a href="{{ route('activities.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
</div>
@endsection
