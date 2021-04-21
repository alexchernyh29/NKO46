@extends('layout')

@section('content')
    <div class="container">
        <h3>My news</h3>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Заголовок новости</th>
                <th scope="col">Сообщение новости</th>
                <th scope="col">Ссылки</th>
                <th scope="col">Действия</th>

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
                        {{$one_news->link}}
                    </td>
                    <td>
                        <a href="{{route('news.destroy', ['id' => $one_news->id])}}" class="btn btn-block btn-danger"> Удалить</a>
                        <br>
                        <a class="btn btn-block btn-warning" href="{{ route('news.edit' ,$one_news->id) }}">Редактировать</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        <a href="{{ route('news.create') }}" class="btn btn-success">Create</a>

    </div>

@endsection

