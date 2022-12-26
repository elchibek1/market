@extends('base')
@section('content')
    <h1 class="mb-3">Edit product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('products.update', ['product' => $product])}}" method="post">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{$product->title}}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description">{{$product->description}}</textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
        <input type="text" name="price" class="form-control" value="{{$product->price}}">
        </div>
        <div class="form-group">
            <label for="category">Category</label>
            <input type="text" name="category_id" class="form-control" value="{{$product->category->name}}">
        </div>
        <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>

@endsection
