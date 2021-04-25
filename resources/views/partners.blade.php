@extends('layout')

@section('content')

    <h1 class="blog-post-title">Партнёры</h1>
    <div class="container">
        <h1 class="mt-5"><span>Центр регионального</span> развития</h1>
        <p class="luuk">Ведущая организация в сфере исследования общественного мнения, изучения современных политических и социальных процессов на территории региона. На сегодняшний день Центр регионального развития – это команда специалистов, обладающих компетенциями для успешной исследовательской работы, научной деятельности и эффективного использования информационно-коммуникационных технологий.</p>
        <p>Где нас найти: <a style="color: #800000" href="https://соцпортал46.рф/">Центр регионального развития</a>.</p>
    </div>

    <div class="container">
        <h1 class="mt-5">Кафедра философии и социологии <span>Юго-Западного государственного университета</span></h1>
        <p class="luuk">Если Вы активная, разносторонняя, творческая личность, Вас интересует общественная проблематика, аналитическая и исследовательская деятельность, Вы планируете получение качественного высшего образования в ведущем ВУЗе региона, наша кафетра, это ваш выбор</p>
        <p>Где нас найти: <a style="color: #800000" href="https://swsu.ru/structura/up/ef/fis/">Кафедра философии и социологии Юго-Западного государственного университета</a>.</p>
    </div>

    <div class="container">
        <h1 class="mt-5"><span>Центр инноваций</span> и технологий</h1>
        <p class="luuk">Обеспечивает поиск, внедрение и поддержку высокотехнологичных решений; развивает экосистему технологического предпринимательства в Курской области;
            содействует трансферу технологий и инновационных разработок ученых-инноваторов региона; создает и проводит мероприятия для поддержки стартапов; реализует проекты, направленные на развитие молодежного инновационного и высокотехнологичного предпринимательства Курской области.</p>
        <p>Где нас найти: <a style="color: #800000" href="https://vk.com/innovcenter">Центр инноваций и технологий</a>.</p>
    </div>

    <div class="container">
        <h1 class="mt-5">АНО «Лаборатория <span>социальной рекламы</span>»</h1>
        <p class="luuk">Возникновение «Лаборатории социальной рекламы» – это ответ на вызов общества, ответ на резко возросший интерес к такому явлению как социальная реклама. Наша миссия, содействовать развитию демократических принципов гражданского общества в России.</p>
        <p>Где нас найти: <a style="color: #800000" href=http://www.soclaboratory.ru/>Лаборатория социальной рекламы</a>.</p>
    </div>

    <div class="container">
        <h1 class="mt-5"><span>Департамент развития общественных</span> инициатив Общероссийского народного фронта.</h1>
        <p class="luuk">Помогаем помогать. Мы открыты к сотрудничеству с некоммерческими организациями. Мы поддерживаем ваши инициативы, консультируем, помогаем в развитии.</p>
        <p>Где нас найти: <a style="color: #800000" href="https://onf.ru/region/kurskaya_obl">Департамент развития общественных инициатив </a>.</p>
    </div>
    <style>
        * {
            padding: 0;
            margin: 0;
            border: 0;
        }

        *, *:before, :after {
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
            font-size: 100%;
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

             background: url('../images/5.png') 0 0/140% auto no-repeat;
         }

        .blog-post-title {
            color: #FFD700;
            margin-top: 1%;
            margin-left: 45%;
        }

        span{
            color: #FFD700;
        }

        .container{

            font-size: 25px;
        }

        .luuk{
            font-size: 25px;
            font-weight: 400;
        }

    </style>
@endsection
