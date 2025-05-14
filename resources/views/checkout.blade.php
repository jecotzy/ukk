<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('checkout.store') }}" method="POST">
    @csrf
    <label for="address">Delivery Address:</label>
    <input type="text" name="address" required>

    <label for="payment_method">Payment Method:</label>
    <select name="payment_method" required>
        <option value="credit_card">Credit Card</option>
        <option value="paypal">PayPal</option>
        <option value="bank_transfer">Bank Transfer</option>
    </select>

    <button type="submit">Place Order</button>
</form>
</body>
</html>