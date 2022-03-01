@extends('layouts.main')
@section('container')

    <article class="my-2 py-5 border-bottom">
        <h2>{{ $title }}</h2>
    </article>

    <div class="row mb-5 pb-5">
    @foreach ($categories as $category)
        <div class="col-md-4 mb-3 mt-3">
            <a href="/posts?category={{ $category->slug }}">
                <div class="card text-white">
                <img src="https://source.unsplash.com/1000x1000?{{ $category->name }}" class="card-img-top" alt="{{ $category->name }}" class="image-fluid">
                    
                <div class="card-img-overlay d-flex align-items-center p-0">
                    <h5 class="card-title text-center flex-fill p-4 fs-4" style="background-color: rgba(0,0,0,0.7)">{{ $category->slug }}</h5>
                </div>
                </div>
            </a>
        </div>
        @endforeach

    </div>
@endsection