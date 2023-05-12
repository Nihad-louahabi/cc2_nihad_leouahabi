<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;


class AdminAddCategoryComponent extends Component
{   use  WithFileUploads;
    public $name;
    public $slug;

    public function generateSlug(){
        $this->slug = Str::slg($this->name);
    }
    
    public function updated($fields){
        $this->validateOnly($fields, [
            'name'=>'required',
            'slug'=>'required',

         ]);
    }
    public function storeCategory()
    {   $this->validate([
        'name'=>'required',
        'slug'=>'required',


    ]);
       $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $category->save();
        session()->flash('message','Category has been created successfully!');
    }

 public function render()
    {

        return view('livewire.admin.admin-add-category-component');
    }
}
