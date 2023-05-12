<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Order Confirmation</title>
</head>
<body>
    <p>Hi {{ $order->firstname }} {{ $order->lastname }}</p>
    <p>Your order has been succefully placed.</p>
    <br/>
    <table style="width: 600px ; text-align:right">
        <thead>
            <tr>
                <th>Subtotal</th>
                <th>Tax</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->orderItem as $item )
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price * $item->quantity }} DH</td>
                </tr>

            @endforeach
            <tr>
                <td colspan="3" style="border-top: 1px solid #ccc"></td>
                <td style="font-size: 15px;font-weight:bold;border-top: 1px solid #ccc">Subtotal : {{ $order->subtotal }} DH</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px;font-weight:bold">Tax : {{ $order->tax }} DH</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 15px;font-weight:bold">Shipping : Free shipping</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="font-size: 22px;font-weight:bold">Total : {{ $order->total }} DH</td>
            </tr>
        </tbody>

    </table>

</body>
</html>
