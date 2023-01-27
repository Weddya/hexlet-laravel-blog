@extends('layouts.app')

@section('title', 'О блоге')

@section('header')
    <h1>О блоге</h1>
@endsection

@section('content')
    <p>Эксперименты с Laravel на Хекслете</p>
    @foreach ($team as $member)
        @if ($loop->first)
            Our team:
            <ul>
                @endif
                <li>{{ $member['name'] }} ({{ $member['position'] }})</li>
                @if ($loop->last)
            </ul>
        @endif
    @endforeach
@endsection
