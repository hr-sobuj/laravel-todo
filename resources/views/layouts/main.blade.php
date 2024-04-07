<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @stack('title')
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <header class="bg-gray-900">
        <nav class="container mx-auto py-6">
            <h1 class="text-4xl font-bold text-white"><a href="{{route('todo.home')}}">Todo App</a></h1>
        </nav>
    </header>
    <main class="container mx-auto mt-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold">Todo App</h1>
            <div>
               @yield('button')
            </div>
        </div>
        @yield('main')
    </main>
    @stack('custom-scripts')
</body>

</html>
