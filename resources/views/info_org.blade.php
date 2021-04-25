@extends('layout')

@section('content')
    <div class="container" style="margin-top: 80px;">
    <div class="text__color">
        <div class="text">
            <h1 class="">Информация <span>об организации</span></h1><br><br>
            <div class="centre" >
                <p>Курская региональная общественная организация <span>«Центр региональных исследований и поддержки социальных инициатив Курской области»</span> была основана октябре 2018 года ведущими социологами региона и сотрудниками Центра регионального развития, и стала первой региональной некоммерческой организацией в сфере проведения социологических исследований и поддержки социальных инициатив Курской области.</p>
                <p class="mission">Миссия Центра региональных исследований заключается в распространении идеологии о необходимости практических исследований в жизни общества.</p>
                <p>Организация создана, прежде всего, с целью изучения проблем регионального развития, анализа и прогнозирования общественно-политической и социально-экономической ситуации в Курской области, а также для поддержки, сопровождения и практической реализации общественно значимых инициатив в регионе. </p>
                <p>Сегодня в команду Центра региональных исследований входят кандидаты социологических наук, практикующие исследователи и юристы, проектные менеджеры.</p>
            </div>

        </div>
    </div>
    </div>


    <div class="regulation">
        <div class="regu">

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
                font-size: 30px;
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
                overflow-x: hidden;
                background-image: url("../images/5.png"); background-repeat: no-repeat;  background-size: 100% 300%;
            }

            .text__color{

                height:80%;
            }

            .text{
                margin-left: 50px;
                width: 100%;
                height:100%;
            }

            h1{
                text-align:left;
                margin-left: 10%;
                text-transform: uppercase;
                font-weight: 900;
                font-size: 40px;
            }

            span{
                color: #FFD700;
            }

            .centre{
                margin-top: -20px;
                width: 100%;
                height:200px;
                color: #000;
            }

            /*.centre p{*/
            /*    margin-right: 120px;*/
            /*    font-size: 25px;*/
            /*    line-height: 30px;*/
            /*    line-height: 40px;*/
            /*    text-shadow: 1px 1px 1px #000;*/
            /*    color: #000;*/
            /*}*/



            .regu{
                z-index: 2;
                margin-top: 70px;
                margin-left: 100px;
                width: 700px;
                height:500px;
                color: #000;

            }


        </style>
        @endsection




