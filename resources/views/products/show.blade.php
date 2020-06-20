@extends('layouts.app')
@section('content')
<div class="row justify-content-sm-center">
  <div class="col-xs-12 col-sm-10 col-md-7 col-lg-6">
    <div class="card">
      <div class="card">
        <header class="padding text-center bg-primary">
          <a href="/productos" class="bg-success">Lista</a>
        </header>
        <div class="card-body padding">
          <h1 class="card-title">{{$product->title}}</h1>
          <h4 class="card-subtitle">{{$product->price}}</h4>
          <p class="card-text">{{$product->description}}</p>
          <p>{{$product->price}}</p>
          <div class="card-actions">
            <add-product-btn :product='{!! $product !!}'></add-product-btn>
            @include('products.delete')
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
