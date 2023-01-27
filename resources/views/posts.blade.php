@extends('layouts.main')

@section('container')
@foreach($posts as $post)
<article class="mt-5">
  <a href="/post/{{ $post['slug'] }}">
    <h1>{{ $post['title'] }}</h1>
  </a>
  <h3>{{ $post['author'] }}</h3>
  <p>{{ $post['body'] }}</p>
</article>
@endforeach

@endsection
