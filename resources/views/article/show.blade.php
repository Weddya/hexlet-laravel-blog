@extends('layouts.app')

@section('title', "$article->name | Статья")

@section('header')
    Статья: {{ $article->name }}
@endsection

@section('content')
    {{$article->body}}
@endsection
