<!DOCTYPE html>
<html>
<head>
    <title>Update Order</title>
</head>
<body>

    <h2>Update Order</h2>

    <form method="POST" action="{{ route('customer.update', compact('order')) }}">
        @method('PUT')
        @csrf
        
        <div>
            <label for="item">Item</label><br>
            <input type="text" id="item" name="item" value="{{ $order->item }}">
        </div>

        <div>
            <label for="quantity">Quantity</label><br>
            <input type="number" id="quantity" name="quantity" value="{{ $order->quantity }}">
        </div>

        <div>
            <button type="submit">Update</button>
        </div>
    </form>

</body>
</html>
