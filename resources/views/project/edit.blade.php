@extends('layout')

@section('content')
    <div class="container">
        <h3>Edit</h3>

        {!! Form::open(['route' => ['project.update']]) !!}
        {{Form::hidden('id', $project->id)}}
        <div class="form-group">
            {{Form::label('title', 'Заголовок')}}
            {{Form::text('title', $project->title,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'Сообщение')}}
            {{Form::text('message', $project->message,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('link', 'Ссылка')}}
            {{Form::text('link',  $project->link,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        {{Form::submit('Сохранить изменения', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>

@endsection
