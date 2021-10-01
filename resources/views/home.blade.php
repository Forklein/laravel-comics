@extends('layouts.main')

@section('title', 'Home')
@section('content')
<main>
    <section id="home">
        <div class="container">
            <div class="row">
                @foreach($cards as $key => $card)
                    <div class="card">
                        <img src="{{$card['thumb']}}" alt="{{$card['series']}}">
                        <p>{{strtoupper($card['series'])}}</p>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col load">{{strtoupper('Load More')}}</div>
            </div>
        </div>
        <div class="bgc-primary">
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