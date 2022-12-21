@extends('base')
@section('content')

<div class="pb-3 text-center">
    <h1>
        All products
    </h1>
    <a href="{{route('products.create')}}" type="button" class="btn btn-outline-primary">
        add product
    </a>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <td>
                {{$product->title}}
            </td>
            <td>
                {{is_null($product->description) ? "No description" : $product->description}}
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

        @endforeach
        </tbody>
    </table>

</div>

@endsection
