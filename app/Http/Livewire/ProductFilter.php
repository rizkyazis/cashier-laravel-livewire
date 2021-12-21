<?php

namespace App\Http\Livewire;

use App\Models\Category;
use Livewire\Component;

class ProductFilter extends Component
{
    public $categories;

    public function render()
    {
        $this->categories = Category::get();
        return view('livewire.product-filter');
    }

    public function filter($filter){
        $this->emit('filterProduct',$filter);
    }
}
