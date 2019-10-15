@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 mb-4">
            <div class="row mb-3">
                <img src="{{asset('storage/'.$event->image)}}" alt="" width="100%">
            </div>
            <div class="row mb-3">
                <h3> <strong>{{ $event->title }}</strong> </h3>
            </div>
            <div class="row mb-3">
                <p> {!! $event->description !!} </p>
            </div>
            <div class="row mb-5 text-light">
                <div class="row">
                    <div class="col-md-3">
                        <img src="{{ asset('storage/events/photo-1521358522799-ad7a75d9e346.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('storage/events/photo-1506112573664-1a1b66d93ff3.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('storage/events/photo-1496304841270-2cb66cf766b4.jpg') }}" alt="" width="100%">
                    </div>
                    <div class="col-md-3">
                        <img src="{{ asset('storage/events/photo-1521358522799-ad7a75d9e346.jpg') }}" alt="" width="100%">
                    </div>
                </div>
            </div>
            <div class="row mb-3 d-flex justify-content-center">
                <button class="btn btn-success" href="">
                    Click here to register
                </button>
            </div>
        </div>
        <div class="col-md-3 text-center">
            <div class="row mb-1">
                <div class="col">
                    
                    <p>About EO</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Capacity, End_date, Category</p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p>Location</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css_link')
    <link href="{{asset('css/events/style.css')}}" rel="stylesheet" type="text/css" />
@endsection