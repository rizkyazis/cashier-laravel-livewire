<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Queue\Listener;
use Livewire\Component;
use phpDocumentor\Reflection\Types\This;

class ProductIndex extends Component
{
    public $products;
    public $search;
    public $filter;

    protected $listeners = ['filterProduct'];

    public function render()
    {
        if($this->filter === null && $this->search === null || $this->search === ''){
            $this->products = Product::get();

        }elseif($this->filter != null && $this->search === null || $this->search === ''){
            $categories = ProductCategory::where('category_id',$this->filter)->get();
            $id = [];
            foreach($categories as $category){
                array_push($id,$category->product_id);
            }
            $this->products = Product::whereIn('id',$id)->get();

        }elseif($this->filter === null && $this->search != null || $this->search != ''){
            $this->products = Product::where('name','like','%'.$this->search.'%')->get();

        }elseif($this->filter != null && $this->search != null || $this->search != ''){
            $categories = ProductCategory::where('category_id',$this->filter)->get();
            $id = [];
            foreach($categories as $category){
                array_push($id,$category->product_id);
            }
            $this->products = Product::whereIn('id',$id)->where('name','like','%'.$this->search.'%')->get();
        }
        return view('livewire.product-index');
    }

    public function filterProduct($filter){

        $this->filter = $filter;
    }

    public function addCart($product_id){
        $this->emit('addCart',$product_id);
    }

}
