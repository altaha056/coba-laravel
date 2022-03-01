@extends('layouts.main')
@section('container')
    <article class="my-2 py-5 border-bottom">
        <h2>{{ $title }}</h2>
    </article>
    <h1>Nama {{$name}}</h1>
    <p>Email <?= $email; ?> </p>
    <p>Ini adalah halaman about</p>
    <img src="img/<?= $image; ?>" alt="<?= $name ?>" class="img-fluid img-thumbnail rounded"/>
@endsection