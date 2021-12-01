@extends('layouts.main')
@section('content')
@section('topbar')
  <x-top-bar-main/>
@endsection()

@section('navigation')
  <x-navigation/>
@endsection

@if (auth()->user()->role_id == 1)
  
@else
  <x-create-post-btn/>
@endif


<section class="d-flex">
    

    <div class="wrapper-profile container">
        <div class="left-col profile-img">
            @if (auth()->user()->profile_picture)
                  <img src="{{ asset('storage/'.auth()->user()->profile_picture)}}" alt="" height="120" width="120" class="rounded">
                @else
                    <img src="/Assets/Images/avatar.png" alt="" height="120" width="120" class="rounded">    
                @endif
        </div>
        <div class="right-col">
            <div class="name-username">
                <h5>{{ $user->name }}</h5>
                <p>{{ $user->username }}</p>
            </div>
            <div class="call-to-action">
                @if ($user->id == auth()->user()->id)
                <a href="/user/{{auth()->user()->id}}/edit" class="dm-btn btn">
                {{-- <a href="{{ route('user.edit', ['user' => auth()->user()->username]) }}" class="dm-btn btn"> --}}
                    <img src="/Assets/Icons/user-edit.svg" alt="">
                </a>
                @else
                <div class="follow-btn btn">
                    <p>Follow</p>
                </div>
                    
                @endif
                <a class="dm-btn btn">
                    <img src="/Assets/Icons/message-text-outline.png" alt="">
                </a>

                @if (auth()->user()->role_id == 3 )
                <a href="{{route('dashboard.index')}}" class="dm-btn btn text-light">
                    <img  src="/Assets/Icons/dashboard.png" alt="">
                    {{-- Admin --}}
                </a>
                @endif
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="status-count">
            <div class="followers">
                <p class="count-followers">
                    {{ number_format($user->followers_count) }}
                </p>
                <p class="title">
                    Followers
                </p>
            </div>
            <div class="following">
                <p class="count-following">
                    {{ number_format($user->following_count) }}
                </p>
                <p class="title">
                    Following
                </p>
            </div>
            <div class="posts">
                <p class="count-posts">
                    {{ number_format($posts->count()) }}
                </p>
                <p class="title">
                    Post
                </p>
            </div>
        </div>
        <h2 class="title-wrapper-post">POST</h2>
        @if (session()->has('succes'))
            <div class="alert alert-succes mx-auto" role="alert">
                {{ session('succes') }}
            </div>
        @endif
        <div class="wrapper-post">
            <div class="wrapper-card-post ">
                {{-- @foreach ($posts as $post)
                    <div class="card-post-me mx-2">
                        <div class="front-card">
                            <a href="/post/{{ $post->id }}">
                             
                                @if ($post->image)
                                    <img src="{{asset('storage/'.$post->image)}}" alt="">
                                @else
                                <img src="/Assets/Images/img-post1.png" alt="">
                                    
                                @endif
                            </a>
                        </div>
                        <div class="back-card">
                        </div>
                    </div>
                @endforeach --}}

                @foreach ($posts as $post)

<div id="card" class="container d-flex justify-content-center align-items-center">

  <!-- card-content -->
  <section class="card-post shadow-lg mb-3 mt-3">
    <div class="top-card container-sm">
      <!-- Bagian Kiri Card -->
      <ul class="top-card-left ">
        <li>
          {{-- <a href="/profile/{{auth()->user()->id}}"> --}}
                <img src="/Assets/Images/avatar.png" alt="" height="40" width="40" class="rounded-circle">    
          {{-- </a> --}}
        </li>
        <li class="mx-2">
          {{-- <a href="/profile/{{auth(->user()->id)}}"> --}}
            <p class="profile-name">
              {{ $post->user->name}}
            {{-- </p> --}}
          </a>
          <p class="text-time">{{\Carbon\Carbon::parse($post->created_at)->diffForHumans() }} at {{$post->place}}</p>
        </li>
      </ul>

      <!-- Bagian Kanan Card -->
      <div class="right-card-post">
        {{-- <a href="">
          <img src="/Assets/Icons/more-btn.png" alt="" />
        </a> --}}
      </div>
    </div>

    <!-- Bagian gambar di card -->
    <div class="image-card">
      <a href="/post/{{$post->id}}">
        @if($post->image)
            <img src="{{ asset('storage/'.$post->image)}}" alt="" >
        @endif
      </a>
    </div>

    
    <!-- Bagian Content kaya deskripsi -->
    <div class="description-card container">
      {{-- <a href="#profile">
            <img class="profile-pic" src="/Assets/Images/profile-pic-me.png" alt="" />
          </a> --}}
      <h6 class="title m-1"><?= $post->title; ?></h6>
    </div>

    <div class="card-panel container-sm mb-2">
      <ul class="icon-card">
        <li>
          <a href="/categories/{{ $post->categories}}" type="button" class="btn btn-category">
            {{ $post->category->name }}
          </a>
        </li>
        <li>
          <button href="#emot" onclick="react()">
            <img id="emot" src="/Assets/Icons/emoticon-outline.png" alt="" />
          </button>
        </li>
        <li>
          <button type="button" data-bs-toggle="offcanvas" data-bs-target="#comment" aria-controls="comment">
            <img src="/Assets/Icons/comment-quote-outline.png" alt="" />
          </button>
        </li>
        <li>
          <a href="/post/{{$post->id}}">
            <img id="detail" src="/Assets/Icons/eye-outline.png" alt="" />
          </a>
        </li>
        <li>
          <button type="button" data-bs-toggle="offcanvas" data-bs-target="#share" aria-controls="share">
            <img src="/Assets/Icons/share-all-outline.png" alt="" />
          </button>
        </li>
      </ul>
    </div>
  </section>

</div>
@endforeach

            </div>
        </div>
    </div>
    </div>


    </div>
    </div>
</section>
@endsection()
