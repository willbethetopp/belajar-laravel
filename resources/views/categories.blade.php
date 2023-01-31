@extends('layouts.main')

@section('container')

<h1>{{ $title }}</h1>

<ul style="font-size: 1.5rem">
  @foreach($categories as $category)
  <li>
    <a href="/categories/{{ $category->slug }}">{{ $category->name }}</a>
  </li>
  @endforeach
</ul>

@endsection
