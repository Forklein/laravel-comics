@extends('layouts.main')
@section('title', 'Comic')

@section('content')
<main>
    <section id="comic">
        <div class="bar bgc-primary"></div>
        <div class="container">
            <p>Advertisement</p>
            <div class="row">
                <div class="col">
                    <h1>{{$comic['title']}}</h1>
                    <div class="info d-flex">
                        <div class="info-price d-flex p-3">
                            <p>{{$comic['price']}}</p>
                            <p>Available</p>
                        </div>
                        <div class="info-availability p-3">
                            <p>Check availability</p>
                        </div>
                    </div>
                    <p>{{$comic['description']}}</p>
                </div>
                <div class="col advertisement">
                    <img src="{{ asset('images/adv.jpg')}}" alt="advertisement">
                </div>
            </div>
        </div>
    </section>
</main>
@endsection