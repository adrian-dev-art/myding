@extends('layouts.main')

@section('top-bar')
  @extends('components.top-bar-main')
@endsection()

@section('content')

{{-- @dd($post) --}}

    <div id="card" class="container d-flex justify-content-center align-items-center">
      
      <!-- card-content -->
      <section class="card-post shadow-lg mb-3 mt-3">
        <div class="top-card container-sm">
          <!-- Bagian Kiri Card -->
          <ul class="top-card-left ">
            <li >
              <a href="/profile/{{$post->user->id}}" >
                @if ($post->user->profile_picture)
                <img src="/Assets/Images/{{ $post->user->profile_picture }}" alt="" height="40" width="40" class="rounded-circle">
                @else
                    <img src="/Assets/Images/avatar.png" alt="" height="40" width="40" class="rounded-circle">    
                @endif
              </a>
            </li>
            <li class="mx-2">
              <a href="#profile">
                <p class="profile-name">
                  {{ $post->user->name}}
                </p>
              </a>
              <p class="text-time">{{$post->created_at->diffForHumans() }} at {{$post->place}}</p>
              
            </li>
          </ul>
          
          <!-- Bagian Kanan Card -->
          <div class="right-card-post">
            <a href={{ url()->previous() }}>
              <img src="/Assets/Icons/back-btn.png" alt="" />
            </a>
          </div>
        </div>
        
        <!-- Bagian gambar di card -->
        <div class="image-card">
        @if($post->image)
             <img src="{{asset('storage/'.$post->image)}}" alt="">
        @else
            <img src="/Assets/Images/img-post1.png" alt="">
        @endif
        </div>
        
        <!-- Bagian Content kaya deskripsi -->
        <div class="description-card container">
          {{-- <a href="#profile">
            <img class="profile-pic" src="/Assets/Images/profile-pic-me.png" alt="" />
          </a> --}}
          <h6 class="title ">{{$post->title}}</h6>
          <p class="description-post">
            {!! $post->description !!}
          </p>
          </div>
          
          <div class="card-panel container-sm mb-2">
            <ul class="icon-card">
              <li>
                <a type="button" class="btn btn-category">
                  {{ $post->category->name }}
                </a>
              </li>
              <li>
                <button href="#emot" onclick="react()" >
                  <img id="emot" src="/Assets/Icons/emoticon-outline.png" alt="" />
                </button>
              </li>
              <li>
                <button type="button" data-bs-toggle="offcanvas" data-bs-target="#comment"
                aria-controls="comment">
                <img src="/Assets/Icons/comment-quote-outline.png" alt="" />
              </button>
            </li>
            <li>
              <button type="button" data-bs-toggle="offcanvas" data-bs-target="#share"
              aria-controls="share">
              <img src="/Assets/Icons/share-all-outline.png" alt="" />
            </button>
          </li>
        </ul>
      </div>
    </section>
    
  </div>
 
  


@endsection()