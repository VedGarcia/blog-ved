@csrf

<label for="" class="uppercase dark:text-gray-200 text-xs">Titulo</label>
<span class="text-xs text-red-600">
    @error('title') 
    {{$message}}
    @enderror
</span>
<input type="text" name="title" class="rounded bg-gray-700 border-gray-600 w-full mb-4 text-violet-200" value="{{ old('title', $post->title)}}">


<label for="" class="uppercase dark:text-gray-200 text-xs">Slug</label>
<span class="text-xs text-red-600">
    @error('slug') {{$message}}
        
    @enderror
</span>

<input type="text" name="slug" class="rounded bg-gray-700 border-gray-600 w-full mb-4 text-violet-200" value="{{old('slug', $post->slug)}}">


<label for="" class="uppercase dark:text-gray-200 text-xs">Contenido</label>
<span class="text-xs text-red-600">
    @error('body') 
    {{$message}}
    @enderror
</span>
<textarea name="body" rows="5" class="rounded bg-gray-700 border-gray-600 w-full mb-4 text-violet-200">{{ old('body', $post->body)}}</textarea>

<div class="flex justify-between items-center">
    <a href="{{route('posts.index')}}" class="dark:text-indigo-300">Volver</a>
    <input type="submit" value="Enviar" class="cursor-pointer border dark:bg-gray-300 dark:text-stone-800 rounded px-2 py-1">
</div>