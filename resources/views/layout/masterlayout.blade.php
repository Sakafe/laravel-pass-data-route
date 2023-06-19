<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GoogleBaba - @yield('title','website')</title>
    <style>
        #wrapper{
            background-color: cyan;
            color: brown;
        }
        .header{
            padding: 5px;
        }
        .nav{
            text-align: center;
            background: greenyellow;
            height: 25px;
            padding: 10px;
        }
        .main{
            display: flex;
            align-items: center;
            justify-content: center
        }
        .article{
            width: 90%;
            padding: 10px;
        }
        .aside{
            background: goldenrod;
            width: 40%;

        }
        .footer{
            text-align: center;
            margin: 10px;
            padding: 10px;
        }
    </style>

</head>
<body>
    <div id="wrapper">
        <header class="header">
            <h1>Google Baba</h1>
        </header>
        <nav class="nav">
            <a href="{{route('home')}}">Home</a>
            <a href="{{route('about')}}">About</a>
            <a href="{{route('mypost')}}">Post</a>
        </nav>
        <main class="main">
            <article class="article">
                @hasSection('content')
                @yield('content')
                @else
                <h2>No content found!</h2>
                @endif
            </article>
            <aside class="aside">
               @section('aside')
               <ul>
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('about')}}">About</a></li>
                <li><a href="{{route('mypost')}}">Post</a></li>
            </ul>
               @show
            </aside>
        </main>
        <footer class="footer">
            Googlebaba@copyright.2023
        </footer>
    </div>
    @stack('scripts')

</body>
</html>
