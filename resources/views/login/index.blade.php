@extends('layouts.main')

@section('container')

<div class="row justify-content-center ">
    
  <div class="col-lg-4 ">
    <main class="form-signin">
      <h1 class="h3 mb-3 fw-normal text-center">Log in</h1>
      
      <form method="POST" action="/login">
        @csrf
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" autofocus required value="{{ old('email') }}">
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
          <label for="password">Password</label>
        </div>
        @if (session()->has('success'))        
          <div class="alert alert-success alert-dismissible fade show" role="alert">
              {{ session('success') }}
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        @if (session()->has('loginError'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('loginError') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        @endif
        <button class="w-100 btn btn-lg btn-primary" type="submit">Log in</button>
      </form>
      <small class="d-block text-center mt-3">Don't have account? <a href="/register">Register now</a></small>
      
    </main>
  </div>
</div>

  
@endsection