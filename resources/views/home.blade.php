@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center" style="margin-top: -1.25%">
        <div class="col-8" >>
            <livewire:product-index/>
        </div>
        <div class="col-4" style="background-color: white">
            <livewire:cart/>
        </div>
    </div>
</div>
@endsection
