@extends('layout')

@section('content')
    <div class="container">
        <h3>Проекты</h3>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Заголовок проекта</th>
                <th scope="col">Описание проекта</th>
                <th scope="col">Ссылки</th>
                <th scope="col">Действия</th>

            </tr>
            </thead>
            @foreach ($project as $one_project)
                <tbody>
                <tr>
                    <td>
                        {{$one_project->id}}
                    </td>
                    <td>
                        {{$one_project->title}}
                    </td>
                    <td>
                        {{$one_project->message}}
                    </td>
                    <td>
                        {{$one_project->link}}
                    </td>
                    <td>
                        <a href="{{route('project.destroy', ['id' => $one_project->id])}}" class="btn btn-block btn-danger"> Удалить</a>
                        <br>
                        <a class="btn btn-block btn-warning" href="{{ route('project.edit' ,$one_project->id) }}">Редактировать</a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
        <a href="{{ route('project.create') }}" class="btn btn-success">Create</a>

    </div>

@endsection
