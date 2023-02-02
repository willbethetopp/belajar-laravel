@extends('layouts.main')

@section('container')
<h1>{{ $title }}</h1>

@if ($posts->count())
  <div class="card mb-3">
    <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->title }}">
    <div class="card-body text-center">
      <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
      <p>
        <small class="text-muted">
          By <a href="/authors/{{ $posts[0]->author->name }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
        </small>
      </p>
      <p class="card-text">{{ $posts[0]->excerpt }}</p>
      <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
    </div>
  </div>
@else
  <p class="text-center fs-4">No post found.</p>
@endif

<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
      <div class="col-md-4 mb-3">
        <div class="card" style="min-height: 100%">
          <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 3px;"><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
          <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->title }}">
          <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p>
              <small class="text-muted">
              By <a href="/authors/{{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}
          </small>
            </p>
            <p class="card-text">{{ $post->excerpt }}</p>
            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>
</div>

{{-- @foreach($posts as $post)
<article class="mb-3 pb-3 border-bottom">
  <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
    <h4>{{ $post->title }}</h4>
  </a>
  <p>By <a href="/authors/{{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
  <p>{{ $post->excerpt }}</p>
  <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
</article>
@endforeach --}}

@endsection
