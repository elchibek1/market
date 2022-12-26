@extends('base')
@section('content')
    <div class="container mb-4">
        <h1 class="text-center">Show product</h1>
        Title: <h3>{{$product->title}}</h3>

        Description: <h3>{{$product->description}}</h3>

        Price: <h3>{{number_format($product->price, 2)}}</h3>
        @if (!is_null($product->category))
            Category:  <h3>{{$product->category->name}}</h3>
        @endif
    </div>

    <footer lass="blockquote-footer ml-2">
        <a href="{{route('home')}}" class="btn btn-warning btn-sm">Back</a> |
        <a href="{{route('products.edit', ['product' => $product])}}" class="btn btn-primary btn-sm">Edit</a>
    </footer>
@endsection
