@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-lg-4">
    @if(session()->has("success"))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{ session("success") }}</strong> Please login below.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @if(session()->has("loginFailed"))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>{{ session("loginFailed") }}</strong> Please try again.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    <main class="form-signin w-100 m-auto text-center">
      <h1 class="h3 mb-3 fw-normal">Please Login</h1>
      <form class="mt-3" action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" autofocus required>
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback text-start">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback text-start">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
      </form>
      <small class="d-block mt-3">Not Registered? <a href="/register">Register Now!</a></small>
    </main>
  </div>
</div>
@endsection
