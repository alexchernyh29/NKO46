@extends('layout')

@section('content')
    <div class="container">
        <h3>Новости</h3>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th style="width: 250px" scope="col">Заголовок новости</th>
                <th scope="col">Описание новости</th>
                <th scope="col">Ссылки</th>
            </tr>
            </thead>
            @foreach ($news as $one_news)
                <tbody>
                <tr>
                    <td>
                        {{$one_news->title}}
                    </td>
                    <td>
                        {{$one_news->message}}
                    </td>
                    <td>

                        <a style="width: 44px;border-radius: 50%" href="{{$one_news->link}}" class="btn btn-block btn-primary text-left">  <i class="fab fa-vk"></i></a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>


    </div>

@endsection
