@extends('layouts.app')

@section('title', 'Добавить статью')

@section('header')
    Добавить статью
@endsection

@section('content')
    @if ($errors->any())
        <div>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        </div>
    @endif
    {{ Form::model($article, ['route' => 'articles.store']) }}
        {{ Form::label('name', 'Название') }}
        {{ Form::text('name', null, ['class' => 'form-control']) }}<br>
        {{ Form::label('body', 'Содержание') }}
        {{ Form::textarea('body', null, ['class' => 'form-control']) }}<br>
        {{ Form::submit('Создать', ['class' => 'form-control']) }}
    {{ Form::close() }}
@endsection
