@extends('base')
@section('content')
<div class="container pb-3">
    <div class="pb-3 text-center">
        <h1>
            All products
        </h1>
        <a href="{{route('products.create')}}" type="button" class="btn btn-outline-primary mt-2">
            add product
        </a>
    </div>

    <div class="row">
    <table class="table table-striped mt-5">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Category</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>
                    <a href="{{route('products.show', ['product' => $product])}}">
                        {{$product->title}}
                    </a>
                </td>
                <td>
                    {{is_null($product->category) ? "No category" : $product->category->name}}
                </td>
                <td>
                    {{number_format($product->price, 2)}}
                </td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <a class="btn btn-outline-warning"
                                   href="{{route('products.edit', ['product' => $product])}}">Edit</a>
                            </div>
                            <div class="col-12 col-md-6">
                                <form action="{{route('products.destroy', ['product' => $product])}}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-outline-danger">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    </div>
</div>

@endsection
