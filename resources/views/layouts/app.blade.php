<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>

    <link rel="icon" href="https://www.s2d.inf.br/wp-content/uploads/2020/06/logo-icon-min.png" sizes="32x32">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Normalize Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

</head>

<body>
    <header class="header" style="background-color:#fff ">
        <div class="container">
            <div class="logo">
                <a href="/">
                    <img src="https://www.s2d.inf.br/wp-content/uploads/2020/08/logo-site.jpg"
                        alt="S2D Soluções em Tecnologia">
                </a>
            </div>
        </div>
    </header>
    @yield('content')
</body>

</html>
