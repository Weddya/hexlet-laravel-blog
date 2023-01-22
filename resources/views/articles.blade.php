@extends('layouts.app')

@section('title', 'Статьи')

@section('header')
    <h1>Статьи</h1>
@endsection

@section('content')
    <h1>Articles:</h1>
    @foreach ($articles as $article)
        <h3>{{ $article->name }}</h3>
        <p>{{ $article->body }}</p>
        <br>
    @endforeach
@endsection
