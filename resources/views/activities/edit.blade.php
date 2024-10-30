<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>
</head>
<body>
    <div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1>Edit Activity</h1>

        <form action="{{ route('activities.update', $activity->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label for="type">Type:</label>
                <select id="type" name="type" class="form-control">
                    <option value="">Select an option</option>
                    <option value="Surf" {{ $activity->type == 'Surf' ? 'selected' : '' }}>Surf</option>
                    <option value="Windsurf" {{ $activity->type == 'Windsurf' ? 'selected' : '' }}>Windsurf</option>
                    <option value="Kayak" {{ $activity->type == 'Kayak' ? 'selected' : '' }}>Kayak</option>
                    <option value="ATV" {{ $activity->type == 'ATV' ? 'selected' : '' }}>ATV</option>
                    <option value="Hot air baloon" {{ $activity->type == 'Hot air baloon' ? 'selected' : '' }}>Hot air baloon</option>
                </select>
            </div>

            <div>
                <label for="dateTime">Date and Time:</label>
                <input type="datetime-local" id="dateTime" name="dateTime" class="form-control" value="{{ \Carbon\Carbon::parse($activity->dateTime)->format('Y-m-d\TH:i') }}">
            </div>

            <div>
                <label for="notes">Notes:</label>
                <textarea id="notes" name="notes" class="form-control" rows="4" maxlength="200" >{{ old('notes', $activity->notes) }}</textarea>
            </div>

            <div>
                <label for="paid">Paid:</label>
                <input type="checkbox" id="paid" name="paid" {{ $activity->paid ? 'checked' : '' }}>

            </div>

            <div>
                <label for="satisfaction">Satisfaction (0-10):</label>
                <input type="number" id="satisfaction" name="satisfaction" class="form-control" min="0" max="10" value="{{ old('satisfaction', $activity->satisfaction) }}">
            </div>

            <button type="submit" class="btn btn-primary">Update Activity</button>
        </form>
        <form action="{{ route('activities.destroy', $activity->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this activity?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete Activity</button>
        </form>
    </div>
</body>
</html>
