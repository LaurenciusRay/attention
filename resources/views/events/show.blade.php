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
                <button class="btn-lg btn-success" href="">
                    Click here to register
                </button>
            </div>
        </div>
        <div class="col-md-4 text-center" >
            <div class="row mb-5">
                <div class="col d-flex justify-content-center profile_cardEo">
                    <!-- Card Profile -->
                    <div class="card" style="width: 18rem;">
                        <div class="img">
                            <img src="{{ Gravatar::src('raymondantonio587@gmail.com') }}" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Event Organizer</h5>
                        </div>
                    </div>
                    <!-- End Card Profile -->
                </div>
            </div>
            <div class="row mb-5">
                <div class="col d-flex justify-content-center profile_cardEo">
                    <div class="card" style="width: 18rem;">
                        <div class="card-title">
                            <h5> <strong class="text-secondary"> Capacity </strong> </h5>
                        </div>
                        <div class="card-body">
                            <h4 class="text-info"> 20 Left </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
                <div class="col d-flex justify-content-center profile_cardEo">
                    <div class="card bg-danger" style="width: 18rem;">
                        <div class="card-body">
                            <h4 class="text-light"> {{ $daysLeft }} </h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mb-5">
            <div class="col  d-flex justify-content-center profile_cardEo">
                    <div class="card" style="width: 18rem;">
                        <div class="card-title">
                            <h5> <strong class="text-secondary"> Address </strong> </h5>
                        </div>
                        <div class="card-body">
                           <p> <strong>  Jl. Kh Ahmad Dahlan Blok L2 no.12, Jakarta Selatan </strong> </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css_link')
    <link href="{{asset('css/events/style.css')}}" rel="stylesheet" type="text/css" />
@endsection