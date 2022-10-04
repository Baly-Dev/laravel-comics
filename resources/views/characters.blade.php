@extends('layouts.default')

@section('title')
    {{$title}}
@endsection

@section('content')
    @include('partials.header')
    <div class="page">
        <h1>{{$title}}</h1>
    </div>
@endsection