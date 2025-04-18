<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
</head>
<body>

    <h2>Admin Page</h2>

    <table border="1">
        <caption>All Orders</caption>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Item</th>
                <th>Quantity</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->user->name }}</td>
                    <td>{{ $order->user->email }}</td>
                    <td>{{ $order->item }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->created_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
