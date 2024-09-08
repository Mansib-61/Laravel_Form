<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmation</title>
    <link rel="stylesheet" href="{{ asset('css/styles3.css') }}">
</head>
<body>
    <div class="confirmation-container">
        <h1>Confirmation</h1>
        <p>You submitted the following details:</p>
        <ul class="confirmation-details">
            <li><strong>From:</strong> {{ $from ?? 'Not provided' }}</li>
            <li><strong>To:</strong> {{ $to ?? 'Not provided' }}</li>
            <li><strong>Subject:</strong> {{ $subject ?? 'Not provided' }}</li>
            <li><strong>Description:</strong> {!! nl2br(e($description ?? 'Not provided')) !!}</li>
        </ul>
        <a href="{{ route('form.show') }}" class="btn btn-primary">Submit another form</a>
    </div>
</body>
</html>
