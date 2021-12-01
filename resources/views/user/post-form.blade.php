@extends('layouts.main')

@section('content')
<div class="container">

  <x-auth-validation-errors class="mb-4 text-white" :errors="$errors" />

    <div class="content-add-edit-post mt-3 ">
        <h2 class="d-flex align-items-center mb-3">Add Post</h2>

        <form action="/post" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3 group-input">
              <label for="title" class="form-label">Title</label>
              <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{old('title')}}">
              @error('title')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
              @enderror
            </div>

            <div class="mb-3 group-input">
              <label for="slug" class="form-label ">Slug</label>
              <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{old('slug')}}">
              @error('slug')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
              @enderror
            </div>

            <div class="mb-3 group-input">
              <label for="place" class="form-label ">Place</label>
              <input type="text" class="form-control @error('place') is-invalid @enderror" id="place" name="place" value="{{old('place')}}">
              @error('place')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
              @enderror
            </div>
            
            <div class="mb-3 group-input">
              <label for="description" class="form-label">Description</label>
              <input id="x" type="hidden" name="description" value="{{old('description')}}">
              <trix-editor input="x"></trix-editor>
              @error('description')
              <p class="text-danger">{{$message}}</p>
              @enderror
            </div>

            <div class="mb-3 group-select">
              <label for="category" class="form-label">Category</label>
              <select class="form-select mb-3" name="category_id" id="category">
                <option selected>Choose the category</option>
                @foreach ($categories as $category)
                  @if(old('category_id') == $category->id)
                    <option value="{{$category->id}}" selected>{{$category->name}}</option>
                    @else
                    <option value="{{$category->id}}">{{$category->name}}</option>
                  @endif
                @endforeach
              </select>
            </div>
            
            <div class="mb-3">
              <label for="image" class="form-label">Post Image</label>
              <input class="form-control input-img bg-second focus:bg-second  @error('image') is-invalid @enderror" type="file" id="image" name="image">
              @error('image')
                  <div class="invalid-feedback">
                    {{ $message}}
                  </div>
              @enderror
            </div>

            
         
            <button type="submit" class="btn btn-primary">Post now</button>
          </form>
    </div>
  </div>

<script>
   const title = document.querySelector('#title');
   const slug = document.querySelector('#slug');

   title.addEventListener('change', function(){
     fetch('/post/checkSlug?title=' + title.value)
     .then(response => response.json())
     .then(data => slug.value = data.slug)
   });
</script>

@endsection()