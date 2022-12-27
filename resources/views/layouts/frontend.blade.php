<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.gstatic.com" crossorigin>

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins:wght@400;500;600&family=Work+Sans:ital,wght@0,100;0,200;1,100&display=swap"
        rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins:wght@400;500;600&family=Work+Sans:ital,wght@0,400;0,500;1,400;1,500&display=swap"
        rel="stylesheet">


    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-slate-200 dark:bg-slate-900">
        {{--header--}}
        <main class="min-h-screen">
            <x-frontend.header></x-frontend.header>
            {{ $slot }}
        </main>
         {{--footer--}}
         <x-frontend.footer></x-frontend.footer>
         
    </div>
</body>

</html>
