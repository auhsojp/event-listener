<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post" action="{{ route('order.save')}}">
        @csrf
        <label for="title">Item</label>
        <input type="text" name="item" placeholder="Item">
        <label for="body">Quantity</label>
        <input type="text" name="quantity" placeholder="quantity">
        <button type="submit">Add your Order</button>
    </form>
</body>
</html>