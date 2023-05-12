<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <p>Hi </p> <p>{{ $date }}</p>
    <p>Your order has been succefully placed.</p>
    <br/>
    <table style="width: 600px ; text-align:right">
        <thead>
            <tr>
                <th>Subtotal</th>
                <th>Tax</th>
                <th>Shipping</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ( $orders as $order )
            <tr>
                <td>{{ $order->subtotal }} DH</td>
                <td>{{ $order->tax }} DH</td>
                <td> Free shipping</td>
                <td>{{ $order->total }} DH</td>
            </tr>

            @endforeach
        </tbody>

    </table>

</body>
</html>
