@extends('layouts.main')
@section('container')
    
<h1>News</h1>
<p>This is a {{ $title }} page</p>

@foreach ($posts as $item)

<article class="my-2 p-2 border-bottom">
    <h3>
        <a href="/posts/{{ $item->slug }}" class="text-decoration-none">
            {{ $item->title }} 
        </a>
    </h3>
    
    <p>
        by <a href="" class="text-decoration-none">
            {{ $item -> user-> name }}
        </a> 
        in 
        <a href="/categories/{{ $item -> category -> slug }}" class="text-decoration-none"> 
            {{ $item -> category -> name }}
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