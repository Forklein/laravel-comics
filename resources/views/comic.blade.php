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
    </section>
</main>
@endsection