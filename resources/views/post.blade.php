@extends('layouts.main')

@section('container')
<div class="container">
  <div class="row my-3 justify-content-center">
    <div class="col-md-8">
      <h1>{{ $post->title }}</h1>
      <p>By <a href="/authors/{{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid" alt="{{ $post->title }}">
      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>
      <br>
      <a href="/posts" class="text-decoration-none">Back to all posts</a>
    </div>
  </div>
</div>
@endsection