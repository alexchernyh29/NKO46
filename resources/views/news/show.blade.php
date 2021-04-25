@extends('layout')

@section('content')
    <div class="container">
        <h3>Проекты</h3>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Заголовок новости</th>
                <th scope="col">Описание новости</th>
                <th scope="col">Ссылки</th>
            </tr>
            </thead>
            @foreach ($news as $one_news)
                <tbody>
                <tr>
                    <td>
                        {{$one_news->id}}
                    </td>
                    <td>
                        {{$one_news->title}}
                    </td>
                    <td>
                        {{$one_news->message}}
                    </td>
                    <td>
                        <a href="{{$one_news->link}}" class="btn btn-block btn-danger">{{$one_news->link}}</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>


    </div>

@endsection
