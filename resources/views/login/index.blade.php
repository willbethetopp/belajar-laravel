@extends('layouts.main')

@section('container')
  <div class="row justify-content-center mt-5">
    <div class="col-lg-4">
      <main class="form-signin w-100 m-auto text-center">
        <h1 class="h3 mb-3 fw-normal">Please Login</h1>
        <form class="mt-3">
          <div class="form-floating">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating">
            <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
          </div>

          <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
        </form>
        <small class="d-block mt-3">Not Registered? <a href="/register">Register Now!</a></small>
      </main>
    </div>
  </div>
@endsection
