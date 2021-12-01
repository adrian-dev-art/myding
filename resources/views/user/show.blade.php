@extends('layouts.main')
{{-- @dd(auth()->user()->id)
@section('topbar')
  <x-top-bar-main/>
@endsection() --}}
@section('navigation')
<x-navigation/>
@endsection



@section('content')


    <div id="card" class="container d-flex justify-content-center align-items-center">
      
      <!-- card-content -->
      <section class="card-post shadow-lg mb-3 mt-3">
        <div class="top-card container-sm">
          <!-- Bagian Kiri Card -->
          <ul class="top-card-left ">
            <li >
              <a href="/profile/{{$post->user->id}}" >
                @if ($post->user->profile_picture)
                    <img src="{{asset('storage/'.$post->user->profile_picture)}}" alt="" height="40" width="40" class="rounded-circle">
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
              <img src="{{ asset('storage/'.$post->image)}}" alt="" >
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
    
          @if ($post->user->id == auth()->user()->id || auth()->user()->role_id == 3 )
          <li>
            <div class="btn-group ">
              <button type="button" class="btn  " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img src="/Assets/Icons/more-btn.png" alt="">
              </button>
              <div class="dropdown-menu dropdown-menu-right">
                <ul>
                  <li>
                    <a href="/post/{{$post->id}}/edit" class="text-dark text-left">Edit</a>
                  </li>
                  <li>
                    <form action="/post/{{$post->id}}" method="POST">
                      @method('delete')
                      @csrf
                      <button href="btn btn-outline-danger" class="text-dark" onclick="return confirm('are you sure?')" >Delete</button>
                    </form>
                  </li>
          {{-- @else --}}
              
          @endif
         

                </ul>
              </div>
            </div>
            
            {{-- <a href="/post/{{$post->id}}/edit/">
              <img src="/Assets/Icons/more-btn.png" alt="">
            </a> --}}
          </li>
        </ul>
      </div>
    </section>
    
  </div>
 
  


@endsection()