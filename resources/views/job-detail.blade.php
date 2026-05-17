<!DOCTYPE html>
<html>
<head>
    <title>JobsDetail</title>
</head>
<body>

<h1>{{ $job['title'] }}</h1>

<p><strong>Salary:</strong> {{ $job['salary'] }}</p>

<p><strong>Description:</strong> {{ $job['description'] }}</p>

<br>

<a href="/jobs">Back to job list</a>

</body>
</html>