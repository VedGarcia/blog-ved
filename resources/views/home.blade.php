@extends('template')
@section('content')
<div class="bg-cyan-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
<!-- Destacado --> 
<span class="uppercase text-xs text-violet-200 bg-violet-600 rounded-full px-2 py-1">Programación</span>
<h1 class="text-3xl text-white mt-4">Blog</h1>
<p class="text-sm text-violet-300 ">Proyecto de desarrollo web</p>
<img src="{{asset('images/dev.png')}}" class=" bg-violet-400 p-16 rounded-lg mb-8 absolute -right-20 -bottom-40">   
</div>    
<div class="px-4">
    <h1 class="text-2xl mb-8 text-violet-400">Contenido Técnico</h1>
    <div class="grid grid-cols-1 gap-4 mb-4">
        @foreach($posts as $post)
            <a href="{{ route('post', $post->slug) }}" class="bg-indigo-700/10 rounded-lg p-4">
                <p class="text-xs flex items-center gap-2">
                    <span class="uppercase text-violet-200 bg-violet-700 rounded-full px-2 py-1">Tutorial</span>
                    <span>{{$post->created_at->format('d/m/Y')}}</span>
                </p>
                <h2 class="text-lg text-cyan-300 mt-2">{{$post->title}}</h2>
                <div class="text-xs text-sky-300 opacity-60 flex items-center gap-1">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5">
                    <path fill-rule="evenodd" d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-5.5-2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM10 12a5.99 5.99 0 0 0-4.793 2.39A6.483 6.483 0 0 0 10 16.5a6.483 6.483 0 0 0 4.793-2.11A5.99 5.99 0 0 0 10 12Z" clip-rule="evenodd" class="h-4 w-4 "/>
                    </svg>

                    {{$post->user->name}}</div>
            </a>
        @endforeach
    </div>
    {{ $posts->links() }}
</div>
@endsection