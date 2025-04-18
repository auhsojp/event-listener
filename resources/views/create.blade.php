<!DOCTYPE html>
<html>
<head>
    <title>Add Order</title>
</head>
<body>

    <h2>Add Order</h2>

    <form method="POST" action="{{ route('customer.store') }}">
        @csrf
        
        <div>
            <label for="item">Item</label><br>
            <input type="text" id="item" name="item">
        </div>

        <div>
            <label for="quantity">Quantity</label><br>
            <input type="number" id="quantity" name="quantity">
        </div>

        <div>
            <button type="submit">Add Order</button>
        </div>
    </form>

</body>
</html>
