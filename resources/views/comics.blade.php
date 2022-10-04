@extends('layouts.default')

@section('title')
    {{$title}}
@endsection

@section('content')
    @include('partials.header')
    <main id="comics">
        <div class="first">
            <img src="img/jumbotron.jpg" alt="">
        </div>
        <div class="second">
            <div class="container relative-wrapper">
                <h2>Current Series</h2>
                <!-- comics -->
                <section class="comics-cards">
                @foreach($comics as $key => $comic)
                    @include('partials.comic_card')
                @endforeach
                </section>
                <button class="btn">Load More</button>
            </div>
        </div>
    </main>
@endsection