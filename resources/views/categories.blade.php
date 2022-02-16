@extends('layouts.main')
@section('container')

    <article class="my-2 py-5 border-bottom">
        <h2>{{ $title }}</h2>
    </article>

@foreach ($categories as $category)

<ul>
    <li>
        <h2>
            <a href="/categories/{{ $category->slug }}">{{ $category->slug }}</a>
        </h2>
    </li>
</ul>
@endforeach
@endsection