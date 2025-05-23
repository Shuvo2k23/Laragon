<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href= {{ asset('css/style.css') }}>
</head>
<body>
    <header>
        <h1>
            @hasSection ('head')
                @yield('head')
            @else
                Unknown Page
            @endif
        </h1>
        <div class="linkContainer">
            <a href={{ route('home') }}>Home</a>
            <a href={{ route('about') }}>About</a>
            <a href={{ route('post') }}>Post</a>
        </div>
    </header>
    <div class="main">
        <div class="article">
            @yield('contents',"NO Content Found")
        </div>
        <div class="navbar">
             @section('nav')
                <ul type="none">
                    <li><a href={{ route('home') }}>Home</a></li>
                    <li><a href={{ route('about') }}>About</a></li>
                    <li><a href={{ route('post') }}>Post</a></li>
                </ul>
             @show
        </div>
    </div>
    <footer>
        <h3>Contact us</h3>
    </footer>
</body>
</html>
