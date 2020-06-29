<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        
        @include('inc.navbar')
    <div class="container">
        @include('inc.messages')
        @yield('content')
    </div>
    </div>
    
    <div class="container">
        <!----------- Footer ------------>
        <footer class="footer-bs">
            <div class="row">
                <div class="col-md-3 footer-brand animated fadeInLeft">
                    <h2> ACT </h2>
                    <p> I made this website for myself and my student organisation. We will use here for our announcements.</p>
                    <p>©2020 All rights reserved</p>
                </div>
                <div class="col-md-4 footer-nav animated fadeInUp">
                    <h4>Menu</h4>
                    
                    <div class="col-md-6">
                        <ul class="pages">
                            <li><a href="/">Home</a></li>
                            <li><a href="/about">About</a></li>
                            <li><a href="/services">Contact</a></li>
                            <li><a href="/posts">Announcement</a></li>
                            <li><a href="/login">Login</a></li>
                            <li><a href="/register">Register</a></li>
                        </ul>
                    </div>
                    
                </div>
                <div class="col-md-2 footer-social animated fadeInDown">
                    <h4>Follow Me</h4>
                    <ul>
                        <li><a href="https://www.facebook.com/abdullahcan.tekin.5243" target="_blank"><i>Facebook</i></a></li>
                        <li><a href="https://twitter.com/acantekinn" target="_blank"><i>Twitter</i></a></li>
                        <li><a href="https://www.instagram.com/acantekinn/" target="_blank"><i>Instagram</i></a></li>
                    </ul>
                </div>
                
            </div>
        </footer>
        <section style="text-align:center; margin:10px auto;"><p> <b><i> by </i></b> <a href="http://enfoplus.net"> <b><i>ACT</i></b> </a></p></section>
    
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        
</body>
</html>
