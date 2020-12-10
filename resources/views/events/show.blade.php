@extends('layouts.app')
@section('content')
<section id="header" class="text-light">
    <div class="layer">
        <div class="container">
            <div class="row h-100">
                <div class="col-sm-6">
                    <h2> <strong> {{ $event->title }} </strong> </h2>
                </div>
                <div class="col-sm-6">
                    <div class="row d-flex justify-content-end">
                        <button href="{{ asset('storage/'. $image[0]->images) }}" class="btn btn-danger btn-sm" data-fancybox="images-preview" data-thumbs='{"autoStart":true}'>
                            View Gallery
                        </button>
                        <div style="display:none;">
                            @foreach($images as $im)
                            <a href="{{ asset('storage/' . $im->images) }}" data-fancybox="images-preview"
                            data-width="1500" data-height="1000"
                            ></a>
                            @endforeach
                            
                            <!-- <a href="{{ asset('storage/events/image3.jpg') }}" data-fancybox="images-preview"
                            data-width="1500" data-height="1000"
                            ></a>
                            <a href="{{ asset('storage/events/image4.jpg') }}" data-fancybox="images-preview"
                            data-width="1500" data-height="1000"
                            ></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section id="content" class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-8 mb-4">
                <div class="row mb-3 d-flex justify-content-end">
                    <h6 class="text-danger"> {{ $daysLeft }} </h6>
                </div>
                <div class="row mb-4">
                    <div class="card px-3 eo-content">
                        <p> {!! $event->description !!} </p>
                    </div>
                </div>

                <div class="text-center">
                    <h3>Booth Maps</h3>
                </div>
                <div class="row mb-4">
                    <div class="card px-0 eo-content">
                        <img src="{{ asset('storage/'.$event->image_layout) }}" height="300px" alt="">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="card px-3 eo-content">
                        <div class="row px-3 mx-auto">
                            @foreach($boothShow as $b)
                            <div class="col-6 col-md-3 col-lg-3">
                                <div class="card my-2">
                                    <div class="card-body text-center">
                                        <button class="btn btn-success" data-toggle="modal" data-target="#book{{$b->id}}"> {{$b->boothname}} </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="book{{$b->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">{{$b->boothname}}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-center">
                                            <table class="table">
                                                <thead class="thead-dark">
                                                    <tr>
                                                        <th scope="col">Length (M2)</th>
                                                        <th scope="col">Wide (M2)</th>
                                                        <th scope="col">Price (Rp.)</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>{{$b->panjang}}</td>
                                                        <td>{{$b->lebar}}</td>
                                                        <td>Rp. {{$b->price}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            @auth('tenantuser')
                                            <a href=""><img src="{{ asset('image/icon/booknow.png') }}" alt=""></a>
                                            @endauth
                                            @unless (Auth::guard('eouser')->check() || Auth::guard('tenantuser')->check())
                                            <div class="text-center">
                                                <p>You must login first as tenant to Join</p>
                                            </div>
                                            <div class="row mb-3 d-flex justify-content-center">
                                                <a class="btn btn-info" href="{{ route('login.tenant-user-form') }}">Login</a>
                                            </div>
                                            @endunless
                                        </div>
                                        <div class="modal-footer text-center">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <!-- <div class="row mb-3 d-flex justify-content-center">
                    <button class="btn btn-info" onclick="handleRegister)({{ $event->id }}">
                        Join
                    </button>
                </div> -->
                @auth('eouser')
                @if($event->eo_users_id == Auth::guard('eouser')->user()->id)
                <div class="row mb-3 d-flex justify-content-center">
                    <a class="btn btn-success" href="{{ route('events.edit', $event->id) }}">
                        Edit
                    </a>
                </div>
                @endif
                @endauth
                <!-- @unless (Auth::guard('eouser')->check() || Auth::guard('tenantuser')->check())
                <div class="text-center">
                    <p>You must login first as tenant to Join</p>
                </div>
                <div class="row mb-3 d-flex justify-content-center">
                    <a class="btn btn-info" href="{{ route('login.tenant-user-form') }}">Login</a>
                </div>
                @endunless -->
            </div>
            <div class="col-md-4 text-center">
                <div class="row mb-5">
                    <div class="col d-flex justify-content-center profile_cardEo">
                        <!-- Card Profile -->
                        <div class="card" style="width: 18rem;">
                            <div class="img">
                                <img src="" class="card-img-top" alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">{{ $event->eo_users->name }}</h5>
                                <a href="{{ route('eventorganizer.index', $event->eo_users->id) }}" class="text-info"> about Author </a>
                            </div>
                        </div>
                        <!-- End Card Profile -->
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col d-flex justify-content-center profile_cardEo">
                        <div class="card" style="width: 18rem;">
                            <div class="card-body">
                                <h5> <strong class="text-secondary"> Address </strong> </h5>
                                <p> <strong> Jl. Kh Ahmad Dahlan Blok L2 no.12, Jakarta Selatan </strong> </p>
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
    #header {
        background-image: url({{asset('storage/'.$event->image)}});
    }
</style>
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
<script>
    function handleRegister(id) {
        $('#registerParticipantModal').modal('show');
    }
</script>
@endsection