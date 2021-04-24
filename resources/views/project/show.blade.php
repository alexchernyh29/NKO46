@extends('layout')

@section('content')
    <div class="container">
        <h3>Проекты</h3>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th scope="col">Заголовок проекта</th>
                <th scope="col">Описание проекта</th>
                <th scope="col">Ссылки</th>
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
                </tr>
                </tbody>
            @endforeach
        </table>


    </div>

@endsection
