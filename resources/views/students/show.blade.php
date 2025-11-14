<!doctype html>
<html>
<head>
    <title>View Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-5">

<h1 class="text-info">Student Details</h1>

<ul class="list-group">
    <li class="list-group-item"><strong>ID:</strong> {{ $student->id }}</li>
    <li class="list-group-item"><strong>Name:</strong> {{ $student->name }}</li>
    <li class-group-item><strong>Email:</strong> {{ $student->email }}</li>
    <li class="list-group-item"><strong>Address:</strong> {{ $student->address }}</li>
</ul>

</body>
</html>
