@extends('dashboard.layouts.main')

@section('container')
  <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Edit Post</h1>
    </div>
    <div class="col-lg-8">
      <form method="POST" action="/dashboard/posts/{{ $post->slug }}" class="mb-5">
        @method('put')
        @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Title</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $post->title) }}">
          @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="slug" class="form-label">Slug</label>
          <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}" readonly disabled>
          @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="category" class="form-label">Category</label>
          <select class="form-select @error('category_id') is-invalid @enderror" name="category_id">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}" {{ old('category_id', $category->id) == $category->id ? ' selected' : ' ' }}>{{ $category->name }}</option>
            @endforeach
          </select>
          @error('category_id')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror  
        </div>
        <div class="mb-3">
          <label for="body" class="form-label">Body</label>
          @error('body')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
          <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
          <trix-editor input="body"></trix-editor>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Create New Post</button>
      </form>
    </div>
  </main>

  <script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');
    const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

    title.addEventListener('keyup', () => {
      let modSlug = title.value;
      modSlug = modSlug.replace(/[^\w\s]|_/g, "").replace(/ /g, '-');
      slug.value = modSlug.toLowerCase();
    });

    // title.addEventListener('keyup', () => {
    //   fetch(`/makeSlug?title=${title.value}`, {
    //     method: 'GET',
    //     headers: {
    //       'Content-Type': 'application/json;charset=utf-8',
    //       'X-CSRF-TOKEN': csrfToken
    //     },
    //   })
    //     .then(response => response.json())
    //     .then(data => slug.value = data.slug)
    //     .catch(error => console.log(error));
    // });

    document.addEventListener('trix-file-accept', (e) => {
      e.prevenDefault();
    })

  </script>
@endsection