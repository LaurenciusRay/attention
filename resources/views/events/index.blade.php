@extends('layouts.app')
@section('content')
<!-- <div class="container">
    <div class="row">
        @foreach($event as $e)
        <div class="col-sm-4">
            <div class="card" style="width: 12rem;">
                <div class="wrapper">
                    <img class="card-img-top" src="{{asset('storage/'.$e->image)}}" alt="Card image cap" width="100%">
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{$e->title}}</h5>
                    <p class="card-text">{!! $e->description !!}, {{ $e->start_date }}</p>
                    <a href="{{ route('events.show', $e->id) }}" class="btn btn-primary">Link</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div> -->

<!-- card event list  -->
<div class="container">
    <div class="row event-controllers-container">
        <div class="event-controllers wow fadeLeft" data-wow-duration="1s" data-wow-delay=".1s">
            <button type="button" class="filter-button active-work" data-filter="all">All</button>
            <button type="button" class="filter-button" data-filter="food">Food</button>
            <button type="button" class="filter-button" data-filter="fashion">Fashion</button>
            <button type="button" class="filter-button" data-filter="sport">Sport</button>
            <button type="button" class="filter-button" data-filter="technology">Technology</button>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @foreach($event as $e)
        <div class="card filter {{$e->title}}" onclick="this.classList.toggle('expanded')">
            <img class="label" src="{{asset('storage/'.$e->image)}}" width="100%" height="200px" alt="card image event list">
            <div class="text1">
                <div class="text-content">
                    <h1 class="title">{{$e->title}}</h1>
                    <span class="text-muted">{{ date('d F Y', strtotime($e->start_date)) }}</span> <br>
                    <span class="text-muted">{{ date('H:i:s', strtotime($e->start_date)) }}</span>
                    <div class="body-text">{!! $e->description !!}</div>
                    <a href="{{ route('events.show', $e->id) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
            <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30">
                <path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5" /></svg>
        </div>
        @endforeach
    </div>
</div>
<!-- end card event list  -->
@endsection
@section('css_link')
<link href="{{asset('css/events/eventlist.css')}}" rel="stylesheet" type="text/css" />
@endsection