@extends('layouts.main')

@section('container')
  <h1>{{ $post->title }}</h1>
  <p>By Author in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
  {!! $post->body !!}
  <br><br>
  <a href="/posts">Back to all posts</a>
@endsection