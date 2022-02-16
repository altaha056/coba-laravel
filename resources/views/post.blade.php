@extends('layouts.main')

@section('container')
<article>
<h2>{{ $post->title }}</h2>
    <p>
        by <a href="" class="text-decoration-none">
            {{ $post -> user-> name }}
        </a> 
        in 
        <a href="/categories/{{ $post -> category -> slug }}" class="text-decoration-none"> 
            {{ $post -> category -> name }}
        </a>
    </p>

    <p>{!! $post->body!!}</p>
</article>
<a href="/blog" style="mb-5" class="text-decoration-none">Kembali</a>
@endsection