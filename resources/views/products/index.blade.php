@extends('base')
@section('content')



<div class="pb-3 container">
    <div class="pb-3 text-center">
        <h1>
            All products
        </h1>
        <a href="{{route('products.create')}}" type="button" class="btn btn-outline-primary mt-2">
            add product
        </a>
    </div>
    
    <table class="table mt-5 container">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <th scope="row">{{$loop->iteration}}</th>
            <td>
                <a href="{{route('products.show', ['product' => $product])}}">
                    {{$product->title}}
                </a>
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
