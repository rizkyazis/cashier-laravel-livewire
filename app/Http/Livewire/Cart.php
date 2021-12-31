<?php

namespace App\Http\Livewire;

use App\Models\Cart as ModelsCart;
use App\Models\Product;
use App\Models\User;
use Livewire\Component;

class Cart extends Component
{

    public $cartProducts;

    protected $listeners = ['addCart'];

    public function render()
    {
        $this->cartProducts = ModelsCart::where('user_id',auth()->user()->id)->with('product')->get();

        return view('livewire.cart');
    }


    public function addCart($product_id){
        $cart = ModelsCart::where('user_id',auth()->user()->id)->where('product_id',$product_id)->get();
        if(count($cart)==0){
            ModelsCart::create([
                'user_id'=>auth()->user()->id,
                'product_id'=>$product_id,
                'quantity'=>1
            ]);
        }else{
            $cart = $cart->first();
            $cart->update([
                'quantity'=>$cart->quantity+1
            ]);
        }

    }

    public function increaseQuantity($cart_id){
        $cart = ModelsCart::find($cart_id);
        $cart->update([
            'quantity'=>$cart->quantity+1
        ]);
    }

    public function decreaseQuantity($cart_id){
        $cart = ModelsCart::find($cart_id);
        if($cart->quantity==1){
            $cart->delete();
        }else{
            $cart->update([
                'quantity'=>$cart->quantity-1
            ]);
        }
        }

}
