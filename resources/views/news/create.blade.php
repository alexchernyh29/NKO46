@extends('layout')

@section('content')
    <div class="container">
        <h3>Create new</h3>
        {!! Form::open(['route' => ['news.store']]) !!}
        <div class="form-group">
            {{Form::label('title', 'title')}}
            {{Form::text('title', null, ['placeholder'=> 'Введите заголовок', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('message', 'message')}}
            {{Form::text('message', null,['placeholder'=> 'Введите сообщение', 'class' => 'form-control'])}}
        </div>

        <div class="form-group">
            {{Form::label('link', 'link')}}
            {{Form::text('link', null, ['placeholder'=> 'Введите ФИО', 'class' => 'form-control'])}}
        </div>

        {{Form::submit('Добавить', ['class' => 'btn btn-success'])}}
        {!! Form::close() !!}
    </div>


@endsection

