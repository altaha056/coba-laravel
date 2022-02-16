@extends('layouts.main')
@section('container')
    
<article class="my-2 py-5 border-bottom">
    <h2>{{ $title }}</h2>
</article>

@foreach ($posts as $item)

<article class="my-2 p-2 border-bottom">
    <h3>
        <a href="/posts/{{ $item->slug }}" class="text-decoration-none">
            {{ $item->title }} 
        </a>
    </h3>
    
    <p>
        by <a href="/authors/{{ $item->author->username }}" class="text-decoration-none">
            {{ $item -> author-> username }}
        </a> 
        in 
        <a href="/categories/{{ $item -> category -> slug }}" class="text-decoration-none"> 
            {{ $item -> category -> slug }}
        </a>
    </p>
    
    <p>
        {{ $item->excerpt }}
        <br/>
        <a href="/posts/{{ $item->slug }}" class="text-decoration-none">
            Read more . . .
        </a>
    </p>
</article>
@endforeach
@endsection