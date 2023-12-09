<!-- resources/views/teacher/show.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $teacher->name }} - Teacher Information</title>
    <!-- Additional styles/scripts -->
</head>
<body>
    <h1>{{ $teacher->name }}</h1>
    <p>Introduction: {{ $teacher->introduction }}</p>
    <p>Background: {{ $teacher->background }}</p>
    <p>Entry Time: {{ $teacher->entry }}</p>
    <img src="{{ asset('storage/' . $teacher->photo) }}" alt="Teacher Photo">
    <a href="{{ route('teacher.edit', $teacher->id) }}"><button>Edit Teacher Information</button></a>
    <!-- Additional content/scripts -->
</body>
</html>
