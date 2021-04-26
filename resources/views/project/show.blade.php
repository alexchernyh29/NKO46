@extends('layout')

@section('content')
    <div class="container">
        <h3>Проекты</h3>
        <table class="table">
            <thead class="thead-light">
            <tr>
                <th style="width: 250px" scope="col">Заголовок проекта</th>
                <th scope="col">Описание проекта</th>
                <th scope="col">Ссылки</th>
            </tr>
            </thead>
            @foreach ($project as $one_project)
                <tbody>
                <tr>
                    <td>
                        {{$one_project->title}}
                    </td>
                    <td>
                        {{$one_project->message}}
                    </td>
                    <td>
                        <a style="width: 44px;border-radius: 50%" href="{{$one_project->link}}" class="btn btn-block btn-primary text-left">  <i class="fab fa-vk"></i></a>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>


    </div>

@endsection
