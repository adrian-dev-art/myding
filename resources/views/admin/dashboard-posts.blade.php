<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Posts') }}
        </h2>
    </x-slot>

    @if (session()->has('succes'))
      <div class="alert alert-succes flex item-center justify-center" role="alert">
          {{ session('succes') }}
      </div>
    @endif

    <div class="flex items-center justify-center min-h-screen bg-gray-200">
      <div class="col-span-12">
        <div class="overflow-auto lg:overflow-visible ">
          <table class="table text-gray-400 border-separate space-y-6 text-sm">
            <thead class="bg-gray-800 text-white">
              <tr>
                <th class="p-3">Title</th>
                <th class="p-3 text-left">Category</th>
                <th class="p-3 text-left">Poster</th>
                <th class="p-3 text-left">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($posts as $post)
                  

              <tr class="bg-gray-800">
                <td class="p-3">
                  <div class="flex align-items-center">
                    <div class="ml-3">
                      <div class="">{{ $post->title }}</div>
                    </div>
                  </div>
                </td>
                <td class="p-3">
                  {{$post->category->name}}
                </td>
                <td class="p-3 font-bold">
                  @if ($post->user->name)  
                    {{ $post->user->name }}
                  @else
                    <p>Poster Deleted</p>
                  @endif
                </td>
                <td class="p-3 inline-flex">
                  {{-- <a href="{{ route('post.show', ['post' => $post->id]) }}" class="text-gray-400 hover:text-gray-100  mx-2"> --}}
                  <a href="/post/{{$post->id}}" class="text-gray-400 hover:text-gray-100  mx-2">
                    <i class="material-icons-outlined text-base">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mini-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                      </svg>
                    </i>
                  </a>
                  <a href="{{ route('post.edit', ['post' => $post->id]) }}" class="text-gray-400 hover:text-gray-100 mr-2">
                    <i class="material-icons-outlined text-base">
                      <svg xmlns="http://www.w3.org/2000/svg" class="mini-icon " className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                      </svg>
                    </i>
                  </a>
                  <form action="{{ route('post.destroy', ['post' => $post->id]) }}" method="POST">
                    @method('delete')
                    @csrf
                    <button href="btn btn-outline-danger" class="text-gray-400 hover:text-gray-100  ml-2" onclick="return confirm('are you sure?')" >
                      <i class="material-icons-round text-base">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mini-icon" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                      </i>
                    </button>
                  </form>
                 
                </td>
              </tr>
              @endforeach
              
            </tbody>
          </table>
        </div>
      </div>

   

</x-app-layout>
