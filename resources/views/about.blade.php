@extends('layouts.main')
@section('container')
    <h1>Nama {{$name}}</h1>
    <p>Email <?= $email; ?> </p>
    <p>Ini adalah halaman about</p>
    <img src="img/<?= $image; ?>" alt="<?= $name ?>" class="img-fluid img-thumbnail rounded"/>
@endsection