@extends('base')
@section('content')
        <div class="pb-3 text-center">
            <h1>
                All categories
            </h1>
            <a href="{{route('products.create')}}" type="button" class="btn btn-outline-primary mt-2">
                add category
            </a>
        </div>
    <div class="row">
        @foreach($categories as $category)
            <div class="col-sm-3">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$category->name}}</h4>
                        <a href="{{route('categories.edit', ['category' => $category])}}" class="btn btn-primary">
                            Edit
                        </a>
                        <form action="{{route('categories.destroy', ['category' => $category])}}" method="post">
                            @method('delete')
                            @csrf
                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
