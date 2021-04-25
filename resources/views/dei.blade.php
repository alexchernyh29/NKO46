@extends('layout')


@section('content')
    <h1 class="blog-post-title"><span>Деятельность</span> нашей организации</h1>
    <div class="container">
        <p class="cont">Мы стремимся к тому, чтобы некоммерческие организации, активные граждане, общественные деятели, социальные предприниматели руководствовались в своей деятельности принципами необходимости и обоснованности своих социально значимых инициатив. Для реализации указанных принципов мы занимаемся следующими видами деятельности:</p><br>
        <ol>
            <li>
                Проведение социологических исследований по актуальным для региона тематикам;</li><br>
            <li>
                Проведение экспертизы и анализа в области социологических исследований;</li><br>
            <li>Создание информационных и просветительских порталов, решающих задачи по распространению информации о важности использования в своей деятельности практических исследований;</li><br>
            <li>Организация мероприятий (вебинаров, семинаров, встреч, школ, конференций) по проведению исследований, поиску и обработке данных, социальному проектированию;</li><br>
            <li>Экспертная поддержка в вопросах, связанных с проведением исследований и использованием полученных данных, социологической культурой, проектным менеджментом;</li><br>
            <li>Разработка концепции и методологии в области социологических исследований;</li><br>
            <li>Социологический и аналитический консалтинг.</li>

        </ol>
    </div>
    <style>
        * {
            padding: 0;
            margin: 0;
            border: 0;
        }

        *, *:before, *:after {
            box-sizing: border-box;
        }

        :focus, :active {
            outline: none;
        }

        a:focus, a:active {
            outline: none;
        }

        nav, footer, header, aside {
            display: block;
        }

        html, body {
            height: 100%;
            width: 100%;
            line-height: 1;
            font-size: 14px;
            -ms-text-size-adjust: 100%;
            -moz-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        input, button, textarea {
            font-family: inherit;
        }

        input::-ms-clear {
            display: none;
        }

        button {
            cursor: pointer;
        }

        button::-moz-focus-inner {
            padding: 0;
            border: 0;
        }

        a, a:visited {
            text-decoration: none;
        }

        a:hover {
            text-decoration: none;
        }

        ul li {
            list-style: none;
        }

        img {
            vertical-align: top;
        }

        body {
            background: url("../images/5.png") 0 0/100% auto no-repeat;
        }

        span{
            color: #FFD700;
        }

        .blog-post-title{
            margin-top: 5%;
            margin-left: 35%;
        }

        .cont{
            line-height: 30px;
        }

        .container{
            margin-top: 2%;
            margin-left: 20%;
            line-height: 20px;
            font-size: 20px;
        }

        ol{
            margin-left: 13%;
        }
    </style>



@endsection
