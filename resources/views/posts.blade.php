@extends('layouts.main')

@section('container')
<h1 class="text-center">{{ $title }}</h1>

<div class="row justify-content-center my-5">

  <div class="col-md-6 ">
    <form action="/posts">
      @if(request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">
      @endif
      @if(request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Seacrh keyword" name="search">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>
  </div>
</div>

@if ($posts->count())
<div class="card my-3">
  <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->title }}">
  <div class="card-body text-center">
    <h2 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h2>
    <p>
      <small class="text-muted">
        By <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a> {{ $posts[0]->created_at->diffForHumans() }}
      </small>
    </p>
    <p class="card-text">{{ $posts[0]->excerpt }}</p>
    <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
  </div>
</div>


<div class="container">
  <div class="row">
    @foreach ($posts->skip(1) as $post)
    <div class="col-md-4 mb-3">
      <div class="card" style="min-height: 100%">
        <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.5); border-radius: 3px;"><a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top" alt="{{ $post->title }}">
        <div class="card-body">
          <h5 class="card-title">{{ $post->title }}</h5>
          <p>
            <small class="text-muted">
              By <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a> {{ $post->created_at->diffForHumans() }}
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

@else
<p class="text-center fs-4">No post found.</p>
@endif

<div class="d-flex justify-content-center mt-5">
  {{ $posts->links() }}
</div>

@endsection
