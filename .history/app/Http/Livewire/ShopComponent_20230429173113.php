<?php

namespace App\Http\Livewire;
use App\Models\Product;
use Livewire\WithPagination;s
use Livewire\Component;

class ShopComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::paginate(12);
        return view('livewire.shop-component',['products'=>$products]);
    }
}
