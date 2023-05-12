<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
</head>
<body>
    <h1>{{ $title }}</h1>

    @foreach ($orders as $order)
        <p>Hi {{ $order->firstname }} {{ $order->lastname }}</p>
        <table style="width: 600px; text-align:center" class="table table-striped">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($order->orderItem as $item)
                    <tr>
                        <td>{{ $item->product->name }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->price }} DH</td>
                        <td>{{ $item->total }} DH</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br/>
    @endforeach

    <p>{{ $date }}</p>
    <p>Your order has been successfully placed.</p>
    <br/>
    <table style="width: 600px; text-align:center" class="table table-striped">
        <thead>
            <tr>
                <th>Subtotal</th>
                <th>Tax</th>
                <th>Shipping</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $subtotal }} DH</td>
                <td>{{ $tax }} DH</td>
                <td> Free shipping</td>
                <td>{{ $total }} DH</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
