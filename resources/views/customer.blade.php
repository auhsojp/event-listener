<!DOCTYPE html>
<html>
<head>
    <title>Customer Page</title>
</head>
<body>

    <h2>Customer Page</h2>

    <table border="1">
        <caption>Your Orders</caption>
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Date</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->item }}</td>
                    <td>{{ $order->quantity }}</td>
                    <td>{{ $order->created_at }}</td>
                    <td>
                        <a href="{{ route('customer.edit', compact('order')) }}">Edit</a>
                    </td>
                    <td>
                        <form action="{{ route('customer.destroy', compact('order')) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <br>

    <a href="{{ route('customer.create') }}">
        <button>Add Order</button>
    </a>

</body>
</html>
