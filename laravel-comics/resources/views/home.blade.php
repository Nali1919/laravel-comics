@extends('layout.layout')


@section('content')
<div class="home-container">
<div class="prodotti">
 @foreach ($comics as $card)
     <div class="card">
  <img src="{{ $card['thumb'] }}" alt=" {{ $card['description'] }}" />
  <h5>{{$card['series']}}</h5>
    </div>

     @endforeach


</div>


</div>


@endsection

