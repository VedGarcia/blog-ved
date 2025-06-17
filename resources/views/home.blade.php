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
            </a>
        @endforeach
    </div>
</div>
@endsection