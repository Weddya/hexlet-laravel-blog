@extends('layouts.app')

@section('title', 'Статьи')

@section('header')
    Список статей
@endsection

@section('content')
    @foreach ($articles as $article)
        <h2><a href="{{ route('articles.show', ['id' => $article->id]) }}">{{$article->name}}</a></h2>
        <div>{{Str::limit($article->body, 50)}}</div>
    @endforeach
    {{ $articles->links() }}
@endsection
