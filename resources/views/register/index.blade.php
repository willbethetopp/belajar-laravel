@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
  <div class="col-lg-5">
    <main class="form-register w-100 m-auto text-center">
      <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
      <form class="mt-3">
        <div class="form-floating">
          <input type="text" class="form-control" id="name" name="name" placeholder="Name">
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
        <div class="form-floating">
          <input type="password" class="form-control" id="re-enter-password" name="reEnterPassword" placeholder="Re-Enter Password">
          <label for="password">Re-Enter Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary mt-3 register-button" type="submit">Register</button>
      </form>
      <small class="d-block mt-3">Already Registered? <a href="/login">Login</a></small>
    </main>
  </div>
</div>

@endsection
