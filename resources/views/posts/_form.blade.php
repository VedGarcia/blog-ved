@csrf

<label for="" class="uppercase dark:text-gray-200 text-xs">Titulo</label>
<input type="text" name="title" class="rounded bg-stone-800 border-gray-800 w-full mb-4 text-gray-800" value="{{$post->title}}">

<label for="" class="uppercase dark:text-gray-200 text-xs">Contenido</label>
<textarea name="" rows="5" class="rounded bg-stone-800 border-gray-800 w-full mb-4 text-gray-800">{{$post->body}}</textarea>

<div class="flex justify-between items-center">
    <a href="{{route('posts.index')}}" class="dark:text-indigo-300">Volver</a>
    <input type="submit" value="Enviar" class="cursor-pointer border dark:bg-gray-300 dark:text-stone-800 rounded px-2 py-1">
</div>