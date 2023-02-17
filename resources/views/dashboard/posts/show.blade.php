@extends('dashboard.layouts.main')

@section('container')
<div class="container">
  <div class="row my-3 justify-content-center">
    <div class="col-lg-7 col-md-6">
      <h1>{{ $post->title }}</h1>
      <div class="my-4">
        <a href="/dashboard/posts" class="btn btn-sm btn-success ml-3"><span data-feather="arrow-left"></span> Back to all posts</a>
        <a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-sm btn-warning ml-3"><span data-feather="edit"></span> Edit</a>
        <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
          @method('delete')
          @csrf
          <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i data-feather="x-square"></i> Delete</button>
        </form>
      </div>
      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->title }}">
      <article class="my-3 fs-6">
        {!! $post->body !!}
      </article>
      <br>
    </div>
  </div>
</div>
@endsection

