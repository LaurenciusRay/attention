@extends('layouts.app')
@section('content')

<section id="header" class="text-light">
    <div class="layer">
        <div class="container">
            <div class="row h-100">
                
            </div>
        </div>
    </div>
</section>
<section id="content" class="pt-4">
    <div class="container">
        <div class="row pb-4">
            <div id="profile" class="col-3 col-md-2">
                <div class="border border-white">
                    <img src="{{ Gravatar::src('raymondantonio587@gmail.com') }}" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="col-3">
                <h5 class="card-title"> <strong> {{$eventorganizer->name}} </strong></h5>
                Location
            </div>
        </div>
        <div class="row">
            <div class="container bg-light eo-content">
                <div class="col my-3">
                    <p> {{ $eventorganizer->description }} </p>
                </div>
                <hr>
                <div class="col mb-3" id="eo-event-card">
                    <div class="space-2 bg-light">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                @foreach($eventSelection as $eSel)
                                <div class="col-lg-4 col-md-6 col-sm-6">
                                    <!-- Card -->
                                    <div class="card border-0 shadow">
                                        <!-- Card image -->
                                        <div class="view ">
                                            <img class="card-img-top rounded-top" src="{{ asset('storage/'. $eSel->image) }}" alt="Card image cap">
                                            <a href="#!">
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!-- Card content -->
                                        <div class="card-body border rounded-bottom">
                                            <a href="#" class="card-text small mb-2 d-block">{{$eSel->eo_detail_categories->name}}</a>
                                            <!-- Title --><a href="#" class="h5 card-title">{{$eSel->title}}</a>
                                            <!-- Description -->
                                            <!-- <p>NS Glasses ™ will Switch the Switch into 3D with Color Switching technology</p> -->
                                            <hr>
                                            <ul class="list-unstyled d-flex justify-content-between mb-3 text-center small">
                                                <li class="pledged">
                                                    <p class="mb-1 font-weight-bold text-dark">Loc.</p>
                                                    <span class="amount">Jakarta</span> 
                                                </li>
                                                <li class="funded">
                                                    <p class="mb-1 font-weight-bold text-dark">Attendance</p>
                                                    <span class="amount">{{ $eSel->capacity }}</span> 
                                                </li>
                                                <li class="days">
                                                    <p class="mb-1 font-weight-bold text-dark">Date</p>
                                                    <span class="amount">{{ $eSel->end_date }}</span> 
                                                </li>
                                            </ul>
                                            <!-- <div class="progress mb-2">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="55" aria-valuemin="91" aria-valuemax="100" style="width:62%">62%</div>
                                            </div> -->
                                            <!-- end: progress bard -->
                                            @auth('eouser')
                                            @if($eSel->eo_users_id == Auth::guard('eouser')->user()->id)
                                                <div class="col d-flex justify-content-center">
                                                    <a class="btn btn-success" href="{{ route('events.show', $eSel->id) }}">
                                                        Check
                                                    </a>
                                                </div>
                                            @endif
                                            @endauth
                                        </div>
                                    </div>
                                    <!-- Card -->
                                </div>
                                <!-- end col -->
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@section('css_link')
    <link href="{{asset('css/events/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
@endsection
@section('css_script')
    <style>
        #header
        {
            background-image:
            url({{asset('storage/'. $eventorganizer->image_banner)}});
        }
    </style>
@endsection
