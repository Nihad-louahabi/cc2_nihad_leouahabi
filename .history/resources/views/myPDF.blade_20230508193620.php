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
    <p>{{ $date }}</p>
    <p>Your order has been successfully placed.</p>
    <br/>
    <table style="width: 600px ; text-align:center" class="table table-striped">
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
