@extends('layouts.main')

@section('title', 'Home')
@section('content')
<main>
    <section id="home">
        <div class="container">
            <div class="row">
                @foreach($cards as $key => $card)
                    <div class="col">
                        <img src="{{$card['thumb']}}" alt="{{$card['series']}}">
                        <p>{{strtoupper($card['series'])}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection