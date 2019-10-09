@extends('layouts.app')
@section('content')
<div class="container">
  
    <div class="row pt-5">
        @foreach ($products as $product)
            
       
            <div class="col-4 pb-4">
            <h4>{{$product->name}}</h4>
                <a href="/viewInventory/{{$product->id}}">
                    <img src="{{$product->image_url}}" style="width:100%;">
                </a>
            </div>
           
        @endforeach
    </div>
</div>
@endsection