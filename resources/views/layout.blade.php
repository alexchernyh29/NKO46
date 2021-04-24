<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="background-color: #f8f9fa">
<div class="navbar justify-content-between bg-light" style="display: flex; padding: 20px;border-bottom: solid 1px grey;">
    <div style="margin-left: 50px;">
        <img src="/images/6.png" alt="">
    </div>
    <div class="row" style="margin-right: 50px">
        <div class="hv">
            <a href="/banner">Главная</a>
        </div>
        <div class="hv">
            <a href="{{route('news.index')}}">Новости</a>
        </div>
        <div class="hv">
            <a href="{{route('project.index')}}">Проекты</a>
        </div>
        <div class="hv">
            <a href="#">Деятельность</a>
        </div>
        <div class="hv">
            <a href="#">Отчетность</a>
        </div>
        <div class="hv">
            <a href="/address">Адрес и Контакты</a>
        </div>
        <div class="hv">
            <a href="#">Партнеры</a>
        </div>
        <div class="hv">
            <a href="/sotrudniki">Сотрудники</a>
        </div>
        <div class="hv">
            <a href="/info_org">Об организации</a>
        </div>
    </div>
</div>
<style>
    a{
        color: black;
        font-size: 20px;
        text-decoration: none;
    }
    a:hover{
        color: black;
        text-decoration: none;
    }
    .hv{
        padding: 10px;
        border-radius: 10px;
    }
    .hv:hover{
        background-color: rgba(255, 190, 10, 1);;
        -webkit-box-shadow: 0px 5px 10px 2px rgba(34, 60, 80, 0.2);
        -moz-box-shadow: 0px 5px 10px 2px rgba(34, 60, 80, 0.2);
        box-shadow: 0px 5px 10px 2px rgba(34, 60, 80, 0.2);
    }
    #bg{
        background-image: url("../images/5.png"); background-size: 100%
    }
    #gb {
        background-image: url("../images/5.png");
    }
</style>
    <main>
        @yield('content')
    </main>

</body>
</html>

