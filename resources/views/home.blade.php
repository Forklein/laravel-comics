@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        @foreach($cards as $key => $card)
            <div class="col">
                <p>{{$card['title']}}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection