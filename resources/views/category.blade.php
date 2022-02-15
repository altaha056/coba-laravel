@extends('layouts.main')
@section('container')
    <h2>Kategori {{ $category }}</h2>

@foreach ($posts as $item)
<article class="mb-5">
    <h3>
    <a href="/posts/{{ $item->slug }}">
        {{ $item->title }}
    </a></h3>
    <h5>by: {{ $item->author }}</h5>
    <p>{{ $item->excerpt }}</p>
</article>
@endforeach
@endsection