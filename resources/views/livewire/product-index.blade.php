<div>
    <div class="row row-cols-2 row-cols-md-2">
        <div class="col">
            <h3><b>Choose</b> Product</h3>
        </div>
        <div class="col text-right">
            <div class="form-group row">
                <div class="col-sm-10">
                    <div class="form-group has-search">
                        <span class="uil uil-search form-control-feedback"></span>
                        <input type="text" wire:model="search" class="form-control" placeholder="Search">
                      </div>
                </div>
              </div>
        </div>
    </div>
<livewire:product-filter/>
    <h3><b>Choose</b> Product</h3>
    <div class="row row-cols-1 row-cols-md-4">
        @foreach($products as $product)
        <div class="col mb-4 card-product" wire:click="addCart({{$product->id}})">
            <div class="card text-center rounded-lg border-0">
                    <img src="{{$product->image}}" class="card-img-top p-2 " alt="Product">
                <div class="card-body">
                    <h5 class="card-title"><b>{{$product->name}}</b></h5>
                    <h5 class="card-title">${{$product->price}}</h5>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
