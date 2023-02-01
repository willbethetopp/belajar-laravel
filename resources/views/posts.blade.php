@extends('layouts.main')

@section('container')
<h1>Halaman {{ $title }}</h1>
@foreach($posts as $post)
<article class="mb-3 pb-3 border-bottom">
  <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
    <h1>{{ $post->title }}</h1>
  </a>
  <p>By <a href="/authors/{{ $post->author->name }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p>
  <p>{{ $post->excerpt }}</p>
  <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read more..</a>
</article>
@endforeach

@endsection
