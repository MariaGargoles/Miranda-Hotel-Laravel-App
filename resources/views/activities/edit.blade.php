<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 20px;
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .btn-primary {
            margin-top: 10px;
        }
        .alert {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <h1 class="mb-4">Edit Activity</h1>

        <form action="{{ route('activities.update', $activity->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
    <label for="type">Type:</label>
    <select id="type" name="type" class="form-control" required>
        <option value="">Select an option</option>
        <option value="Surf" {{ $activity->type == 'Surf' ? 'selected' : '' }}>Surf</option>
        <option value="Windsurf" {{ $activity->type == 'Windsurf' ? 'selected' : '' }}>Windsurf</option>
        <option value="Kayak" {{ $activity->type == 'Kayak' ? 'selected' : '' }}>Kayak</option>
        <option value="ATV" {{ $activity->type == 'ATV' ? 'selected' : '' }}>ATV</option>
        <option value="Hot air balloon" {{ $activity->type == 'Hot air balloon' ? 'selected' : '' }}>Hot air balloon</option>
    </select>
    @error('type')
        <div class="text-danger">{{ $message }}</div>
    @enderror
</div>


            <div class="form-group">
                <label for="dateTime">Date and Time:</label>
                <input type="datetime-local" id="dateTime" name="dateTime" class="form-control" value="{{ \Carbon\Carbon::parse($activity->dateTime)->format('Y-m-d\TH:i') }}">
            </div>

            <div class="form-group">
                <label for="notes">Notes:</label>
                <textarea id="notes" name="notes" class="form-control" rows="4" maxlength="200">{{ old('notes', $activity->notes) }}</textarea>
            </div>

            <div class="form-group">
                <div class="form-check">
                    <input type="checkbox" id="paid" name="paid" class="form-check-input" {{ $activity->paid ? 'checked' : '' }}>
                    <label class="form-check-label" for="paid">Paid</label>
                </div>
            </div>

            <div class="form-group">
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
