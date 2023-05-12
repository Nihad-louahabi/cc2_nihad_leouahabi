<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ShopComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products = Product::pag
        return view('livewire.shop-component',['products'=>$products]);
    }
}
