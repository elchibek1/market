@extends('base')
@section('content')
    <h1 class="mb-3">Create new product</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('products.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description" id="description"></textarea>
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" name="price" class="form-control">
        </div>
{{--        <div class="form-group">--}}
{{--            <label for="category"></label>--}}
{{--        </div>--}}
        <button type="submit" class="btn btn-primary mt-5">Submit</button>
    </form>

@endsection
