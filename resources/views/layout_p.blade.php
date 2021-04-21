<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Select2 -->
{{--    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />--}}
{{--    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>--}}


<!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="app">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <header>
                    {{--                    <div id="logo">--}}
                    {{--                        <img src="img/6.png">--}}
                    {{--                    </div>--}}

                    {{--                    <div id="about">--}}
                    {{--                        <a href="organization.index" class="link">Об организации</a>--}}
                    {{--                        <a href="projects.index" class="link">Проекты</a>--}}
                    {{--                        <a href="news.index" class="link">Новости</a>--}}
                    {{--                        <a href="partners.index" class="link">Партнеры</a>--}}
                    {{--                        <a href="contacts.index" class="link">Контакты</a>--}}
                    {{--                        <a href="reporting.index" class="link">Отчетность</a>--}}
                    {{--                    </div>--}}

                </header>
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                    <img src="/images/6.png" class="img-thumbnail"  alt="">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <a href="{{route('news.index')}}" class="btn btn-light"> Новости</a>
                    <a href="{{route('project.index')}}" class="btn btn-light"> Проекты</a>

                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>
