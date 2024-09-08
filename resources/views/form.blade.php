<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Form</title>
    <link rel="stylesheet" href="{{ asset('css/styles2.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Email Form</h1>
        <form action="{{ route('form.submit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="from">From:</label>
                <input type="email" id="from" name="from" required>
            </div>
            <div class="form-group">
                <label for="to">To:</label>
                <input type="email" id="to" name="to" required>
            </div>
            <div class="form-group">
                <label for="subject">Subject:</label>
                <input type="text" id="subject" name="subject" required>
            </div>
            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Submit</button>
        </form>
    </div>
</body>
</html>
