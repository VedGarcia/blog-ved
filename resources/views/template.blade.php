<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>First app Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
            @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body class="bg-[#FDFDFC] dark:bg-gray-900 text-[#1b1b18] dark:text-[#EDEDEC] min-h-screen">
    <main class="container px-4 m-auto">

        <header class="w-full flex justify-between items-center py-4">
            <div class="flex items-center flex-grow gap-4">
                <a href="{{route('home')}}">
                    <img src="{{asset('images/v.png')}}" class="h-8">
                </a>
                <form action="{{ route('home') }}" method="GET" class="flex-grow">
                    <input type="search" name="search" placeholder="Buscar" class="w-1/2 rounded bg-none outline-none border-none text-violet-800" value="{{request('search')}}">
                </form>
            </div>
            @auth
            <a href="{{route('dashboard')}}">Dashboard</a>
            @else
            <a href="{{route('login')}}">Login</a>
            
            @endauth
        </header>
        <div class="opacity-60 h-px mb-8 bg-gradient-to-r from-emerald-500/20 from-10% via-indigo-500 via-30% to-emerald-500/20 to-90%"></div>

        @yield('content')
        <p class="py-16">
                    <img src="{{asset('images/v.png')}}" class="h-12 mx-auto">

        </p>
    </main>
</body>
</html>