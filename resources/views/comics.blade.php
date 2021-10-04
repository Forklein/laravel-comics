@extends('layouts.main')

@section('title', 'Comics')
@section('content')
<main>
    <section id="comics">
        <div class="container">
            <div class="row">
                @foreach($comics as $key => $comic)
                    <div class="card">
                        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
                        <p>{{strtoupper($comic['series'])}}</p>
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