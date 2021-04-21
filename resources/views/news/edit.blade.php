@extends('layout')

@section('content')
    <div class="container">
        <h3>Edit</h3>

        {!! Form::open(['route' => ['news.update']]) !!}
        {{Form::hidden('id', $news->id)}}
        <div class="form-group">
            {{Form::label('title', 'Заголовок')}}
            {{Form::text('title', $news->title,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'Сообщение')}}
            {{Form::text('message', $news->message,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('link', 'Ссылка')}}
            {{Form::text('link',  $news->link,['placeholder'=> '', 'class' => 'form-control'])}}
        </div>

        {{Form::submit('Сохранить изменения', ['class' => 'btn-success'])}}
        {!! Form::close() !!}
    </div>

@endsection
