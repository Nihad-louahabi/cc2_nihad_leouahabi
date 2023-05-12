<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
class UserOrdersComponent extends Component
{
    public function render()
    {

        $orders = Order::where('user_id',Auth::user()->id)->paginate(12);
        $totalCost = Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->sum('total');
        $totalPurchase = Order::where('status','!=','delivered')->where('user_id',Auth::user()->id)->sum('total');
        return view('livewire.user.user-orders-component',['orders'=>$orders]);
    }
}
