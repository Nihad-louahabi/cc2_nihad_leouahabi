<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                    @if(Session::has('order_message'))
                        <div class="alert alert-success" role="alert">{{  Session::get('order_message')}}</div>
                    @endif
                <div class="card card-default">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="mb-0">Order Details</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('user.orders') }}" class=" btn-success float-end"  style=" border-radius: 8px;border: none;
                                padding: 10px 20px;
                                text-align: center;">My Orders</a>
                                @if($order->status == 'ordered')
                                    <a href="#" wire:click.prevent="cancelOrder"
                                    style="margin-right: 20px; border-radius: 8px;border: none;
                                    padding: 10px 20px;
                                    text-align: center;" class=" btn-warning float-end">Cancel Order</a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <th><strong>Order Id</strong></th>
                            <td>{{ $order->id }}</td>
                            <th><strong>Ordar Date</strong></th>
                            <td>{{ $order->created_at}}</td>
                            <th><strong>Status</strong></th>
                            <td>{{ $order->status }}</td>
                            @if($order->status == "delivered")
                            <th><strong>Delivery Date</strong></th>
                            <td>{{ $order->delivered_date }}</td>
                            @elseif($order->status == "cancaled")
                            <th><strong>Cancaled Date</strong></th>
                            <td>{{ $order->cancaled_date}}</td>
                            @endif

                        </table>
                    </div>
                </div>
        </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <br>
                <div class="card card-defaut">
                    <div class="card-header">
                        <h4 class="mb-0">Order Items</h4>
                    </div>
                    <div class="card-body">
                    <div class="summary">
                        <div class="order-summary">
                            <h5 class="title-box">Order Summary</h5>
                                <div class="card-body">
                                    <table class="table">
                                        <tbody>
                                            <tr>
                                                <td class="cart_total_label">Subtotal</td>
                                                <td class="cart_total_amount"><span >{{$order->subtotal}}DH</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Tax</td>
                                                <td class="cart_total_amount"><span >{{$order->tax}}DH</span></td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Shipping</td>
                                                <td class="cart_total_amount"> <i class="ti-gift mr-5"></i> Free Shipping</td>
                                            </tr>
                                            <tr>
                                                <td class="cart_total_label">Total</td>
                                                <td class="cart_total_amount"><strong><span >{{$order->total}}DH</span></strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
<br>

        <div class="row">
            <div class="col-md-12">
                <div class="card card-defaut">
                    <div class="card-header">
                        <h4 class="mb-0">Billing Details</h4>
                    </div>
                    <div class="card-body">
                        <table class="table">
                                <tr>
                                    <th ><strong>First Name</strong></th>
                                    <td ><span >{{$order->firstname}}</span></td>
                                    <th ><strong>Last Name </strong></th>
                                    <td class="cart_total_amount"><span >{{$order->lastname}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>Phone </strong></th>
                                    <td ><span >{{$order->mobile}}</span></td>
                                    <th > <strong>Email </strong></th>
                                    <td ><span >{{$order->email}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>Line 1 </strong></th>
                                    <td ><span >{{$order->line1}}</span></td>
                                    <th ><strong>line 2 </strong></th>
                                    <td ><span >{{$order->line2}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>City </strong></th>
                                    <td ><span >{{$order->city}}</span></td>
                                    <th ><strong>Province </strong></th>
                                    <td ><span >{{$order->province}}</span></td>
                                </tr>
                                <tr>
                                    <th > <strong>Country </strong></th>
                                    <td ><span >{{$order->country}}</span></td>
                                    <th > <strong>Zipcode </strong></th>
                                    <td ><span >{{$order->zipcode}}</span></td>
                                </tr>
                        </table>

                    </div>

                </div>
            </div>
        </div>
<br>
        <br>
    </div>

</div>
