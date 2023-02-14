@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-lg-5">
    <main class="form-register w-100 m-auto text-center">
      <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
      <form class="mt-3" action="/register" method="post">
        @csrf
        <div class="form-floating">
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name" value="{{ old('name') }}" autofocus required>
          <label for="name">Name</label>
          @error('name')
          <div class="invalid-feedback text-start">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" placeholder="Username" value="{{ old('username') }}" required>
          <label for="username">Username</label>
          @error('username')
          <div class="invalid-feedback text-start">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}" required>
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback text-start">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback text-start">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" class="form-control @error('reEnterPassword') is-invalid @enderror" id="re-enter-password" name="reEnterPassword" placeholder="Re-Enter Password" required>
          <label for="password">Re-Enter Password</label>
          @error('reEnterPassword')
          <div class="invalid-feedback text-start">
            {{ $message }}
          </div>
          @enderror
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-3 register-button" type="submit">Register</button>
      </form>
      <small class="d-block mt-3">Already Registered? <a href="/login">Login</a></small>
    </main>
  </div>
</div>

@endsection
