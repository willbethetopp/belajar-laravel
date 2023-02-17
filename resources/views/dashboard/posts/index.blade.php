@extends('dashboard.layouts.main')

@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success col-lg-10" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
  <div class="table-responsive col-lg-10">
    <table class="table table-striped table-sm">
      <thead>
        <tr class="text-center">
          <th scope="col">#</th>
          <th scope="col">Title</th>
          <th scope="col">Category</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($posts as $post)
        <tr>
          <td class="text-center">{{ $loop->iteration }}</td>
          <td>{{ $post->title }}</td>
          <td class="text-center">{{ $post->category->name }}</td>
          <td class="text-center">
            <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">
              <i data-feather="eye"></i>
            </a>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning">
              <i data-feather="edit"></i>
            </a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><i data-feather="x-square"></i></button>
            </form>
          </td>

        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

</main>
@endsection

