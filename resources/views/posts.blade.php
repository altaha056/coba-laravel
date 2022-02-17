@extends('layouts.main')
    @section('container')
    
    <article class="my-2 py-5 ">
        <h2>{{ $title }}</h2>
    </article>
    
    @if ($posts->count())        
        
    <div class="card mt-2 mb-5 p-2">
        <img src="https://source.unsplash.com/1600x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
        <div class="card-body text-center">
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
            </a>
            <p class="card-text">
                <small class="text-muted">
                     {{ $posts[0]->created_at->diffForHumans() }} by <a href="/authors/{{ $posts[0]->author->username }}" class="text-decoration-none">
                        {{ $posts[0] -> author-> username }}
                    </a> 
                    in 
                    <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none"> 
                        {{ $posts[0] -> category -> slug }}
                    </a>
                </small>
            </p>
            <p class="card-text">{{ $posts[0]->excerpt }}</p>
            
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">
                Read more
            </a>
        </div>
    </div>   

    
    <div class="row">
        @foreach ($posts->skip(1) as $item)
            <div class="col-md-4 mb-5">
                <div class="card">
                    <a href="/categories/{{ $item->category->slug }}">
                        <div class="position-absolute m-2 py-1 px-3 text-white" style="background-color: rgba(0, 0, 0, 0.6)">{{ $item->category->name  }}</div>
                    </a>
                    <img src="https://source.unsplash.com/800x500?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/posts/{{ $item->slug }}" class="text-decoration-none text-dark">
                                {{ $item->title }} 
                            </a>
                        </h5>
                        
                        <p>
                            <small class="text-muted">
                                {{ $item->created_at->diffForHumans() }} 
                                by <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">
                                    {{ $item -> author-> username }}
                                </a> 
                            </small>
                        </p>
                        <p>
                            {{ $item->excerpt }}
                        </p>
                        <a href="/posts/{{ $item->slug }}" class="text-decoration-none btn btn-primary">
                            Read more
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    
    @else
        <h3>no post found.</h3>
    @endif
    
@endsection