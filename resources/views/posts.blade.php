@extends('layouts.main')
    @section('container')
    
    <article class="my-2 py-5 ">
        <h2 class="text-center mb-3">{{ $title }}</h2>
        <div class="row  justify-content-center">
            <div class=" col-md-6">
                <form action="/posts">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    @if (request('author'))
                        <input type="hidden" name="author" value="{{ request('author') }}">
                    @endif
                    <div class="input-group mb-3">
                        <input type="text" value="{{ request('search') }}" class="form-control" placeholder="search" name="search">
                        <button class="btn btn-outline-secondary" type="submit">Search</button>
                    </div>                
                </form>
            </div>
        </div>
    </article>
    
    
    @if ($posts->count())        
        
    <div class="card mt-2 mb-5 p-2">
        @if ($posts[0]->image)
        <div style="max-height: 350px; overflow:hidden";>
            
            <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->category?$posts[0]->category->name:$posts[0]->title }}" class="image-fluid">
        </div>

        @else
        <img src="https://source.unsplash.com/1600x400?{{ $posts[0]->category?$posts[0]->category->name:'' }}" class="card-img-top" alt="{{ $posts[0]->category?$posts[0]->category->name:$posts[0]->title }}">
        @endif
        <div class="card-body text-center">
            <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">
                <h3 class="card-title">{{ $posts[0]->title }}</h3>
            </a>
            <p class="card-text">
                <small class="text-muted">
                     {{ $posts[0]->created_at->diffForHumans() }} by <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">
                        {{ $posts[0] -> author-> username }}
                    </a> 
                    @if (
                        ($posts[0] -> category)
                    )
                        in 
                    <a href="/posts?category={{ $posts[0]->category->name }}" class="text-decoration-none"> 
                        {{ $posts[0] -> category -> name }}
                    </a>
                    @endif
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
                    @if ($item->category)
                        <a href="/posts?category={{ $item->category->name }}">
                            <div class="position-absolute m-2 py-1 px-3 text-white" style="background-color: rgba(0, 0, 0, 0.6)">{{ $item->category->name  }}</div>
                        </a>
                            
                        @else
                            <div class="position-absolute m-2 py-1 px-3 text-white" style="background-color: rgba(0, 0, 0, 0.6)">No Category</div>
                        
                    @endif
                    @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" alt="{{ $item->title}}" class="image-fluid">

                    @else

                        <img src="https://source.unsplash.com/800x500?{{ $item->category?$item->category->name:'' }}" class="card-img-top" alt="{{ $item->title }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="/posts/{{ $item->slug }}" class="text-decoration-none text-dark">
                                {{ $item->title }} 
                            </a>
                        </h5>
                        
                        <p>
                            <small class="text-muted">
                                {{ $item->created_at->diffForHumans() }} 
                                by <a href="/posts?author={{ $item->author->username }}" class="text-decoration-none">
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
    
    <div class="d-flex justify-content-center mb-5 mb-5 mb-5 mb-5 mb-5">
        {{ $posts->links() }}
    </div>
    
    @else
        <article class="my-2 py-5 ">
            <h2>Sorry, no post found :(</h2>
        </article>
    @endif
    
@endsection