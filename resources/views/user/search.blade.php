@extends('layouts.main')

@section('navigation')
    <x-navigation/>
@endsection

@section('topbar')
    <x-top-bar-main/>
@endsection

@section('content')

    <section class="search">


    <div class="search-input d-flex align-items-center mt-3 ">

        <form  action="/search" class="col-7">
            
            <div class="input-group mb-3">
                <input type="text" class="form-control text-light bg-transparent border-none" placeholder="Search post ..." id="search" autofocus name="search" value="{{ old('search')}}">
                <button class="btn btn-outline-secondary" type="submit" id="button-addon2" onClick="showCard()">
                    search
                </button>
            </div>

            </form>
        </div>

        @if (request('search'))
            @foreach ($posts as $post)
            <div id="card" class="container d-flex justify-content-center align-items-center" >
                
                <!-- card-content -->
                <section class="card-post shadow-lg mb-3 mt-3">
                    <div class="top-card container-sm">
                    <!-- Bagian Kiri Card -->
                    <ul class="top-card-left ">
                        <li>
                        <a href="/profile/{{$post->user->id}}">
                        
                                <img src="/Assets/Images/avatar.png" alt="" height="40" width="40" class="rounded-circle">    
                            
                            
                        </a>
                        </li>
                        <li class="mx-2">
                        <a href="/profile/{{$post->user->id}}">
                            <p class="profile-name">
                            {{ $post->user->name}}
                            </p>
                        </a>
                        <p class="text-time">{{$post->created_at->diffForHumans() }} at {{$post->place}}</p>

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
                        @else
                            <img src="/Assets/Images/img-post1.png" alt="">
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
                        <a href="/categories/{{ $post->category->name}}" type="button" class="btn btn-category">
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
        @endif
        <h2 class="d-flex align-items-center">No Post Found</h2>




    </section>
@endsection
