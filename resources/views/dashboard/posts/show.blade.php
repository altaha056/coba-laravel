@extends('dashboard.layouts.main')
@section('container')
  
<div class="container">
        <div class="row my-5">
            <div class="col-lg-8">
                <article class="my-2 pt-5 pb-2 border-bottom">
                    <h2>{{ $post->title }}</h2>
                    <p>
                        {{ $post->created_at->diffForHumans() }}

                    </p>
                </article>
                <a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my posts</a>
                <a href="" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
                <a href="" class="btn btn-danger"><span data-feather="x-circle"></span> Delete</a>
                <article class="my-2 pt-5 pb-5 mb-5 border-bottom">                    
                    <div class="mb-5">
                        <img src="https://source.unsplash.com/1200x500?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->category->name }}" class="image-fluid">
                    </div>
                    <p>{!! $post->body!!}</p>
                    <a href="{{ URL::previous() }}" style="mb-5" class="text-decoration-none">Back Previous</a>
                </article>
            </div>
        </div>
    </div>

@endsection