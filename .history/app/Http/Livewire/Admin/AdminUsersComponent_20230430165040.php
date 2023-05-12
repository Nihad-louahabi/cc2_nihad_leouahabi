<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class AdminComponent extends Component
{
    public $user_id;

    use WithPagination;

    public function  deleteCategory(){
        $user = User::find($this->user_id);

        $user->delete();
        session()->flash('message','user has been deleted successfully!');


    }
    public function render()
    {
        $categories = Category::orderBy('name','ASC')->paginate('5');
        return view('livewire.admin.admin-categories-component',['categories'=>$categories]);
    }
}
