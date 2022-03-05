@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <article class="my-2 pt-5 pb-2 border-bottom">
                    <h2>{{ $post->title }}</h2>
                    <p>
                        {{ $post->created_at->diffForHumans() }}

                        by <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">
                            {{ $post -> author-> username }}
                        </a> 
                        @if ($post->category)
                            in 
                            <a href="/posts?category={{ $post -> category -> slug }}" class="text-decoration-none"> 
                                {{ $post -> category -> slug }}
                            </a>
                        @endif
                    </p>
                </article>
                <article class="my-2 pt-5 pb-5 mb-5 border-bottom">                    
                    <div class="mb-5">
                        @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden";>
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->title }}" class="image-fluid">
                        </div>

                        @else
                        <img src="https://source.unsplash.com/1200x500?{{ $post->category?$post->category->name:'' }}" class="card-img-top" alt="{{ $post->title }}" class="image-fluid">
                        @endif
                    </div>
                    <p>{!! $post->body!!}</p>
                    <a href="{{ URL::previous() }}" style="mb-5" class="text-decoration-none">Back Previous</a>
                </article>
            </div>
        </div>
    </div>
        
@endsection