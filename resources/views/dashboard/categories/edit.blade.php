@extends('dashboard.layouts.main')
@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Category</h1>
    </div>
    <div class="col-lg-8 mb-5">
    <form method="POST" action="/dashboard/categories/{{ $category->name }}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Category name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $category->name) }}">
            @error('name') 
                <div class="invalid-feedback">
                    {{ $message }}
                </div> 
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Update Category</button>
        <a href="{{ URL::previous() }}" class="btn btn-warning">Cancel</a>
    </form>
    </div>

@endsection