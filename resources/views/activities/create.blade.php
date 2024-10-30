<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Activity</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Create New Activity</h1>

        <form action="{{ route('activities.store') }}" method="POST">
            @csrf

            <div class="form-group">
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
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="dateTime">Date and Time:</label>
                <input type="datetime-local" id="dateTime" name="dateTime" class="form-control" required>
                @error('dateTime')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="notes">Notes:</label>
                <textarea id="notes" name="notes" class="form-control" rows="4" maxlength="200" required></textarea>
                @error('notes')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="satisfaction">Satisfaction (1-10):</label>
                <input type="number" id="satisfaction" name="satisfaction" class="form-control" min="1" max="10">
                @error('satisfaction')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-check">
                <input type="hidden" name="paid" value="0"> 
                <input type="checkbox" id="paid" name="paid" class="form-check-input" value="1">
                <label for="paid" class="form-check-label">Paid</label>
                @error('paid')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary mt-3">Create Activity</button>
        </form>
    </div>
</body>
</html>
