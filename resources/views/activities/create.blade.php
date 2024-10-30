<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Activity</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div>
        <h1>Create New Activity</h1>

        <form action="{{ route('activities.store') }}" method="POST">
            @csrf

            <div>
                <label for="type">Type:</label>
                <select id="type" name="type" class="form-control" required>
                    <option value="">Select an option</option>
                    <option value="Surf">Surf</option>
                    <option value="Windsurf">Windsurf</option>
                    <option value="Kayak">Kayak</option>
                    <option value="ATV">ATV</option>
                    <option value="Hot air baloon">Hot air baloon</option>
                </select>
                @error('type')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="dateTime">Date and Time:</label>
                <input type="datetime-local" id="dateTime" name="dateTime" class="form-control" required>
                @error('dateTime')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div>
                <label for="notes">Notes:</label>
                <textarea id="notes" name="notes" class="form-control" rows="4" maxlength="200" required></textarea>
                @error('notes')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Create Activity</button>
        </form>
    </div>
</body>
</html>
