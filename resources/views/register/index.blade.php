@extends('layouts.main')

@section('container')

<div class="row justify-content-center ">
  <div class="col-lg-6">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Create Account</h1>
      <form action="/register" method="POST">

        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="name@example.com">
          <label for="floatingInput">Name</label>
        </div><div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="name@example.com">
          <label for="floatingInput">Username</label>
        </div><div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password"name="password"  class="form-control rounded-bottom" id="password" placeholder="Password">
          <label for="floatingPassword">Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Log in</button>
      </form>
      <small class="d-block text-center mt-3">Already create account? <a href="/login">Login</a></small>
    </main>
  </div>
</div>

  
@endsection