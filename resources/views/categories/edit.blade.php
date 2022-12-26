@extends('base')
@section('content')
    <h1>Edit category</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('categories.update', ['category' => $category]) }}">
        @method('put')
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
