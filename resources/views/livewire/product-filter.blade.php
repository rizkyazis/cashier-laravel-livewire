<div>
    <div class="row row-cols-7 row-cols-md-6">
        <div class="col mb-4" >
            <div class="card card-category text-center rounded-lg border-0" wire:click="filter(null)">
                <span style="font-size: 32px" class="mt-3"><i class="uil uil-clipboard-blank"></i></span>
                <div class="card-body">
                    <span style="font-size: 12px" class="card-title"><b>All Product</b></span>
                </div>
            </div>
        </div>
        @foreach ($categories as $category)
        <div class="col mb-4">
            <div class="card card-category text-center rounded-lg border-0" wire:click="filter({{$category->id}})">
                <span style="font-size: 32px" class="mt-3"><i class="{{$category->icon}}"></i></span>
                <div class="card-body">
                    <span style="font-size: 12px" class="card-title"><b>{{$category->name}}</b></span>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
