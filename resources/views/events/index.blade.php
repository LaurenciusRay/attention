@extends('layouts.app')
@section('content')

<!-- card event list  -->
<div class="container">
    <form class="input-group mb-3" action="" method="GET">
      <input type="text" class="form-control" name="search" placeholder="Search" value="{{ request()->query('search') }}">
    </form>
    <div class="row event-controllers-container">
        <div class="event-controllers wow fadeLeft" data-wow-duration="1s" data-wow-delay=".1s">
            <button type="button" class="btn filter-button active-work" data-filter="all">All</button>
            @foreach($category as $cat)
            <button type="button" class="btn filter-button" data-filter="{{$cat->id}}">{{$cat->name}}</button>
            @endforeach
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        @forelse($event as $e)
        <div class="card filter {{$e->eo_detail_categories_id}}" onclick="this.classList.toggle('expanded')">
            <strong class="mt-4">{{$e->title}}</strong>
                <img id="imageEventList" class="label" src="{{asset('storage/'.$e->image)}}" width="100%" height="200px" alt="card image event list">
            <div class="text1">
                <div class="text-content">
                    <h5 class="title"> {{ $e->title }}</h5>
                    <span class="text-muted">{{ date('d F Y', strtotime($e->start_date)) }}</span> <br>
                    <span class="text-muted">{{ date('H:i:s', strtotime($e->start_date)) }}</span>
                    <div class="body-text line-clamp mb-2">{!! $e->description !!}</div>
                    <a href="{{ route('events.show', $e->id) }}" class="btn btn-primary">Detail</a>
                </div>
            </div>
            <svg class="chevron" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="30">
                <path d="M5 30L50 5l45 25" fill="none" stroke="#000" stroke-width="5" /></svg>
        </div>
        @empty
        <p class="text-center">
            No results found for <strong> {{ request()->query('search') }} </strong>
        </p>
        @endforelse
    </div>
    <div class="row d-flex justify-content-center my-2">
        {{ $event->appends(['search' => request()->query('search')])->links() }}
    </div>
</div>
<!-- end card event list  -->
@endsection
@section('css_link')
<link href="{{asset('css/events/eventlist.css')}}" rel="stylesheet" type="text/css" />
@endsection