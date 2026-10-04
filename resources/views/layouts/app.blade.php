<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="this is portfolio website" />
    <link rel="stylesheet" href="{{ asset('style.css')}}"/>
</head>

<body>
    <header>
        <nav>
            <a href="{{ route('home') }} ">Home</a>
            <a href="{{ route('about')}}">About</a>
            <a href="{{ route('projects')}}">Projects</a>
            <a href="{{ route('contact')}}">Contact</a>
        </nav>
    </header>
    <main>@yield('content')</main>
    <footer></footer>
</body>

</html>