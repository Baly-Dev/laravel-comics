@extends('layouts.default')

@section('title')
    {{$title}}
@endsection

@section('content')
    @include('partials.header') 
    <section id="detail-comic">
        <div class="first">
            <img src="{{asset('img/jumbotron.jpg')}}" alt="">
        </div>
        <div class="separator">
        </div>
        <div class="second">
            <div class="container relative-wrapper">
                <img src="{{$comic_item['thumb']}}" class="poster" alt="">
                <div class="comic-box">
                    <h3 class="title">{{$comic_item['title']}}</h3>
                    <div class="header">
                        <p class="comic-price">
                            U.S Price: {{$comic_item['price']}}
                        </p>
                        <p class="comic-status">
                            Aviable
                        </p>
                    </div>
                    <div class="description">
                        {{$comic_item['description']}}
                    </div>
                </div>
            </div>
        </div>
        <div class="third">
            <div class="container relative-wrapper">
                <div class="talent">
                    <h4>Talent</h4>
                    <div class="talent-row">
                        <div class="left">
                            <p>Art by:</p>
                        </div>
                        <div class="right">
                            @for($i = 0; $i < count($artists); $i++)
                                <span class="highlight">{{$artists[$i]}},</span>
                            @endfor
                        </div>
                    </div>
                    <div class="talent-row">
                        <div class="left">
                            <p>Written by:</p>
                        </div>
                        <div class="right">
                            @for($i = 0; $i < count($writers); $i++)
                                <span class="highlight">{{$writers[$i]}},</span>
                            @endfor
                        </div>
                    </div>
                </div>
                <div class="specs">
                    <h4>Specs</h4>
                    
                </div>
            </div>
        </div>
    </section>
@endsection