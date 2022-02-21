@extends('layouts.main')

@section('container')

<div class="row justify-content-center ">
  <div class="col-lg-4 ">
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Log in</h1>
      @if (session()->has('success'))
          
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      <form method="GET" action="/login">
        @csrf
        <div class="form-floating">
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" autofocus required>
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
      </form>
      <small class="d-block text-center mt-3">Don't have account? <a href="/register">Register now</a></small>
    </main>
  </div>
</div>

  
@endsection