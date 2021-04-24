@extends('layout')
@section('content')
    <div class="jumbotron text-center" id="gb" style="margin-bottom: 0; background-size: 100%; padding: 50px;" >
        <div style="display: flex; justify-content: space-between;">
            <div style="margin-left: 100px">
                <h2 class="display-3" style="color: #ffaf00">Где нас найти?</h2>
                <p class="display-4">г. Курск, переулок Радищева, дом 1</p>
            </div>
            <div style=" margin-right: 200px;">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A7f5c53973045ce22dc70f4d8115e6a1c8b23e79aaa4c929421f9188199d64ef0&amp;width=560&amp;height=355&amp;lang=ru_RU&amp;scroll=true"></script>
            </div>
        </div>
        <hr class="my-4">
        <h2 class="display-3" style="color: #ffaf00">Контакты:</h2>
        <p class="display-4">Руководитель организации: Земцова Екатерина Андреевна</p>
        <a href="tel:+79524912548" id="dd" class="display-4" style="color: black">+7 (952) 491-25-48</a> <br>
        <a href="mailto:kateryazantseva@mail.ru" id="dd" class="display-4" style="color: black">kateryazantseva@mail.ru</a>
    </div>
    <div class="justify-content-between bg-light text-center" style=" padding: 20px;">
    <div>
        <a href="#"><i class="fab fa-vk" style="padding: 5px; font-size:20px;"></i></a>
        <a href="#"><i class="fab fa-telegram-plane" style="padding: 5px; font-size:20px;"></i></a>
        <a href="#"><i class="fab fa-whatsapp" style="padding: 5px; font-size:20px;"></i></a>
        <a href="#"><i class="fab fa-facebook" style="padding: 5px; font-size:20px;"></i></a>
        <a href="#"><i class="fab fa-twitter" style="padding: 5px; font-size:20px;"></i></a>
    </div>
    </div>

@endsection
