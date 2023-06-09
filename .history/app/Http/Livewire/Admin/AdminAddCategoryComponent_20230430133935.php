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
        $this->slug = Str::slug($this->name);
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
        'image'=>'required',


    ]);
       $category = new Category();
        $category->name = $this->name;
        $category->slug = $this->slug;
        $imageNmae = Carbon::now()->timestamp.'.'.$this->image->extension();
        $this->image->storeAs('categories',$imageNmae);
        $category ->image= $imageNmae;
        $category ->is_popular= $this->is_popular;
        $category->save();
        session()->flash('message','Category has been created successfully!');
    }

 public function render()
    {

        return view('livewire.admin.admin-add-category-component');
    }
}
