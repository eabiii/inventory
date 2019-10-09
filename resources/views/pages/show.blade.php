@extends('layouts.app')

@section('content')
<div class="container">
<form action="/viewInventory/{{$product->id}}/edit" method="post">
    @csrf
    <div class="row">
        <div class="col-8">
            <img src="{{$product->image_url }}" class="w-100">
        </div>
        <div class="col-4">
            <div>
                <div class="d-flex align-items-center">
                    <div>
                        <div class="font-weight-bold">
                            <span class="text-dark">Product Information</span>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="font-weight-bold">
                        <span class="text-dark"> {{ $product->name }}</span>
                        
                    </div>
                    <div class="font-weight-bold">
                            <span class="text-dark">Category {{ $product->type }}</span>
                            
                        </div>
                        <div class="font-weight-bold">
                                <span class="text-dark">{{ $product->unit }}</span>
                                
                            </div>
                    <br>
                <div class="font-weight-bold">
                    <input type="number" name="quantity" value="{{ $product->quantity }}" class="form-control mb-2">
                    
                </div>
                
                <br>
                <div>
                        <button type="submit" class="btn btn-success">Update Item</button>
                    </form>
                    <form action="/viewInventory/{{$product->id}}/destroy" method="post">
                        @csrf
                        <button type="submit" class="btn btn-danger">Delete Item</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
