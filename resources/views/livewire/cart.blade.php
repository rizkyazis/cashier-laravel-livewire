<div>
    <h3 class="p-3"><b>Order</b> Product</h3>
    <div class="row p-3">
        <div class="col-7 mb-4 ">
            <b>Product</b>
        </div>
        <div class="col-3  mb-4 ">
            <b>Quantity</b>
        </div>
        <div class="col-2  mb-4 ">
            <b>Total</b>
        </div>
        @foreach ($cartProducts as $item)
        <div class="col-2 mb-1">
            <img src="{{$item->product->image}}" class="rounded img-square-rounded w-100" alt="Product">
        </div>
        <div class="col-5">
            <span>{{$item->product->name}}</span>
            <br>
            <b>${{$item->product->price}}</b>
        </div>
        <div class="col-3">
            <button class="btn btn-sm btn-light"  wire:click="decreaseQuantity({{$item->id}})">-</button>
            <b  class="pl-2 pr-2">{{$item->quantity}}</b>
            <button class="btn btn-sm btn-light" wire:click="increaseQuantity({{$item->id}})">+</button>
        </div>
        <div class="col-2">
            <span><b>${{$item->product->price * $item->quantity}}</b></span>
        </div>
        @endforeach
    </div>


</div>
