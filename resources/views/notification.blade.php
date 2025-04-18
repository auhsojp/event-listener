<!DOCTYPE html>
<html>
<head>
    <title>All Notifications</title>
</head>
<body>

    <h2>All Notifications</h2>

    <ul>
        @foreach ($notifications as $notification)
            <li>{{ $notification->data['message'] }}</li>
        @endforeach
    </ul>

</body>
</html>
