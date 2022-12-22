@extends('base')
@section('content')
    <div class="container">
        <h1 class="text-center">Show product</h1>
        <h3>Title: {{$product->title}}</h3>
        <br>
        <h3>Description: {{$product->description}}</h3>
        <br>
        <h3>Price: {{$product->price}}</h3>
    </div>

    <footer lass="blockquote-footer">
        <a href="{{route('home')}}" class="btn btn-default btn-sm">Back</a>|
        <a href="{{route('products.edit', ['product' => $product])}}" class="btn btn-primary btn-sm">Edit</a>
    </footer>
@endsection
