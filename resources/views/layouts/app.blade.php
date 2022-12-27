<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- title --}}
    <title>@yield('title')</title>
    {{-- /title --}}

    {{-- from welcome --}}
    @vite('resources/js/app.js')

</head>

<body>

    {{-- header section --}}
    <header>
        @include('partials.header')
    </header>
    {{-- /header section --}}

    {{-- main section --}}
    <main>
        @yield('content')
    </main>
    {{-- /main section --}}
    
</body>

</html>