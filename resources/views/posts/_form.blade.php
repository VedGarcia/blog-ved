@csrf

<label for="" class="uppercase dark:text-gray-200 text-xs">Titulo</label>
<span class="text-xs text-red-600">
    @error('title') 
    {{$message}}
    @enderror
</span>
<input type="text" name="title" class="rounded bg-stone-800 border-gray-800 w-full mb-4 text-gray-800" value="{{ old('title', $post->title)}}">


<label for="" class="uppercase dark:text-gray-200 text-xs">Slug</label>
<span class="text-xs text-red-600">
    @error('slug') {{$message}}
        
    @enderror
</span>

<input type="text" name="slug" class="rounded bg-stone-800 border-gray-800 w-full mb-4 text-gray-800" value="{{old('slug', $post->slug)}}">


<label for="" class="uppercase dark:text-gray-200 text-xs">Contenido</label>
<span class="text-xs text-red-600">
    @error('body') 
    {{$message}}
    @enderror
</span>
<textarea name="body" rows="5" class="rounded bg-stone-800 border-gray-800 w-full mb-4 text-gray-800">{{ old('body', $post->body)}}</textarea>

<div class="flex justify-between items-center">
    <a href="{{route('posts.index')}}" class="dark:text-indigo-300">Volver</a>
    <input type="submit" value="Enviar" class="cursor-pointer border dark:bg-gray-300 dark:text-stone-800 rounded px-2 py-1">
</div>