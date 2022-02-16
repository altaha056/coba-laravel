@extends('layouts.main')

@section('container')

    <article class="my-2 py-5 border-bottom">
        <h2>{{ $post->title }}</h2>
    </article>

    <article>
        <p>
            by <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">
                {{ $post -> author-> username }}
            </a> 
            in 
            <a href="/categories/{{ $post -> category -> slug }}" class="text-decoration-none"> 
                {{ $post -> category -> slug }}
            </a>
        </p>

        <p>{!! $post->body!!}</p>
    </article>
    <a href="/blog" style="mb-5" class="text-decoration-none">Kembali</a>
@endsection