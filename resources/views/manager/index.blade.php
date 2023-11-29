<!-- resources/views/manager/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manager Page</title>
</head>
<body>
    <h1>Manager Page</h1>

    <form action="{{ route('manager.upload.link') }}" method="post">
        @csrf
        <label for="youtube_link">YouTube Link:</label>
        <input type="text" name="youtube_link" required>
        <button type="submit">Upload Link</button>
    </form>

    <!-- Display success message if any -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
</body>
</html>
