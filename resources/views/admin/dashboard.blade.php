<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    @if (session()->has('succes'))
    <div class="alert alert-succes flex item-center justify-center" role="alert">
        {{ session('succes') }}
    </div>
  @endif

    <div class="status-app flex justify-center mt-5 sm:flex-col md:flex-row">

      <div class="count-users h-48 w-48 bg-purple-900 rounded-xl flex justify-center items-center ml-5 flex flex-col">
        <p class="text-8xl text-gray-50">{{$users->count()}}</p>
        <p class=" text-gray-50">USERS</p>
      </div>
      
      <div class="count-users h-48 w-48 bg-purple-900 rounded-xl flex justify-center items-center ml-5 flex flex-col">
        <p class="text-8xl text-gray-50">{{$posts->count()}}</p>
        <p class=" text-gray-50">POSTS</p>
      </div>
      
      <div class="count-users h-48 w-48 bg-purple-900 rounded-xl flex justify-center items-center ml-5 flex flex-col">
        <p class="text-8xl text-gray-50">{{$categories->count()}}</p>
        <p class=" text-gray-50">CATEGORIES</p>
      </div>
    
    </div>
    </div>
   

</x-app-layout>
