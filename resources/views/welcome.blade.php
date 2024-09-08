<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="welcome-container">
        <h1>Welcome to Our Form</h1>
        <p>We're glad you're here. Please click the button below to proceed to our email submission form.</p>
        <a href="{{ route('form.show') }}" class="btn btn-primary">Go to Form</a>
    </div>
</body>
</html>
