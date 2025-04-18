<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>

    <h2>Admin Page</h2>

    <a href="{{ route('view') }}">
        <button>View All Orders</button>
    </a>

    @foreach ($logs as $log)
        <div>
            <p>{{ $log->message }}</p>
        </div>
    @endforeach

</body>
</html>
