@extends('layout')


@section('content')
    <div class="jumbotron jumbotron-fluid" id="bg" style="display: flex; justify-content: space-between; margin-bottom: 0;  " >
        <div class="container" style="margin-left: 24%">
            <div class="text-center">
                <div class="row">
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <i class="far fa-address-card" style="font-size: 150px; margin-top: 20px"></i>
                            <div class="card-body">
                                <h5 class="card-title">Об организации</h5>
                                <p class="card-text">Инфа</p>
                                <a href="/info_org" class="btn btn-warning">Перейти к информации</a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <i class="far fa-folder-open" style="font-size: 150px; margin-top: 20px"></i>
                            <div class="card-body">
                                <h5 class="card-title">Проекты</h5>
                                <p class="card-text">Что-то о проектах</p>
                                @php
                                    $pr ='allproject';
                                        //$pr = 'some_project';
                                @endphp
                                <a href="{{route('project.show', ['pr' => $pr])}}" class="btn btn-warning">Проекты</a>
                            </div>
                        </div>
                    </div>

                    <div class="col">
                        <div class="card" style="width: 15rem;">
                            <i class="far fa-newspaper" style="font-size: 150px; margin-top: 20px"></i>
                            <div class="card-body">
                                <h5 class="card-title">Новости</h5>
                                <p class="card-text">Свежак</p>
                                @php
                                    $param = 'allnews';
                                    // $param = 'some_news';
                                @endphp
                                <a href="{{route('news.show', ['param' => $param])}}" class="btn btn-warning">Новости</a>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="card" style="width: 15rem;">
                                    <i class="far fa-handshake" style="font-size: 150px; margin-top: 20px"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">Партнеры</h5>
                                        <p class="card-text">Норм типы</p>
                                        <a href="/partners" class="btn btn-warning">Перейти к информации</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 15rem;">
                                    <i class="far fa-address-book" style="font-size: 150px; margin-top: 20px"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">Контакты</h5>
                                        <p class="card-text">Наши цифры</p>
                                        <a href="/address" class="btn btn-warning">Перейтик к контактам</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card" style="width: 15rem;">
                                    <i class="fas fa-sort-amount-up" style="font-size: 150px; margin-top: 20px"></i>
                                    <div class="card-body">
                                        <h5 class="card-title">Отчетность</h5>
                                        <p class="card-text">Отченость</p>
                                        <a href="#" class="btn btn-warning">Перейтик к отчетности</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="justify-content-between bg-light text-center" style=" padding: 20px;">
        <div>
            <a href="https://vk.com/niknefed46"><i class="fab fa-vk" style="padding: 5px; font-size:20px;"></i></a>
            <a href="https://vk.com/alexchernyh29"><i class="fab fa-telegram-plane" style="padding: 5px; font-size:20px;"></i></a>
            <a href="https://vk.com/nottoday46"><i class="fab fa-whatsapp" style="padding: 5px; font-size:20px;"></i></a>
            <a href="https://vk.com/id93867505"><i class="fab fa-facebook" style="padding: 5px; font-size:20px;"></i></a>
            <a href="https://vk.com/id158565833"><i class="fab fa-twitter" style="padding: 5px; font-size:20px;"></i></a>
        </div>
    </div>


@endsection
