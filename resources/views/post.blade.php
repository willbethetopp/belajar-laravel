@extends('layouts.main')

@section('container')
  <h1>{{ $post->title }}</h1>
  <p>By <a href="/authors/{{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
  {!! $post->body !!}
  <br><br>
  <a href="/posts" class="text-decoration-none">Back to all posts</a>
@endsection