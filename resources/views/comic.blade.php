@extends('layouts.main')
@section('title', 'Comic')

@section('content')
<main>
    <section id="comic">
        <div class="bar bgc-primary">
            <div class="container">
                <div class="thumb">
                    <img src="{{$comic['thumb']}}" alt="{{$comic['title']}}">
                </div>
            </div>
        </div>
        <div class="container" style="margin-top: 25px">
            <p>Advertisement</p>
            <div class="row">
                <div class="col">
                    <h1>{{$comic['title']}}</h1>
                    <div class="info d-flex">
                        <div class="info-price d-flex p-3">
                            <p>U.S. Price: <span>{{$comic['price']}}</span></p>
                            <p style="opacity:0.4">AVAILABLE</p>
                        </div>
                        <div class="info-availability p-3">
                            <p>Check availability <i class="fas fa-sort-down"></i></p>
                        </div>
                    </div>
                    <div class="description">
                        <p>{{$comic['description']}}</p>
                    </div>
                </div>
                <div class="col advertisement">
                    <img src="{{ asset('images/adv.jpg')}}" alt="advertisement">
                </div>
            </div>
        </div>
        <div class="comic-info">
            <div class="container">
                <div class="row">
                    <div class="talent">
                        <h3>Talent</h3>
                        <div class="art d-flex">
                            <h6>Art by:</h6>
                            <div class="artists d-flex">
                                @foreach($comic['artists'] as $artist)
                                    <p>{{$artist}}</p>,
                                @endforeach
                            </div>
                        </div>
                        <div class="written d-flex">
                            <h6>Written by:</h6>
                            <div class="writers d-flex">
                                @foreach($comic['writers'] as $writer)
                                    <p>{{$writer}}</p>,
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="specs">
                        <h3>Specs</h3>
                        <div class="series d-flex">
                            <h6>Series</h6>
                            <p>{{$comic['series']}}</p>
                        </div>
                        <div class="price d-flex">
                            <h6>U.S. Price:</h6>
                            <p>{{$comic['price']}}</p>
                        </div>
                        <div class="sales d-flex">
                            <h6>On Sale Date</h6>
                            <p>{{$comic['sale_date']}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icons">
            <div class="container">
                <div class="row p-3">
                    @foreach($icons as $icon)
                        <div class="icon d-flex">
                            <img src="{{asset('images/'.$icon['src'])}}" alt="{{$icon['name']}}">
                            <p>{{strtoupper($icon['name'])}}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
</main>
@endsection