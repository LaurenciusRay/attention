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
                        <button href="{{ asset('storage/events/image1.jpg') }}" class="btn btn-danger btn-sm" data-fancybox="images-preview" data-thumbs='{"autoStart":true}'>
                            View Gallery
                        </button>
                        <div style="display:none;">
                            <a href="{{ asset('storage/events/image2.jpg') }}" data-fancybox="images-preview"
                            data-width="1500" data-height="1000"
                            ></a>
                            <a href="{{ asset('storage/events/image3.jpg') }}" data-fancybox="images-preview"
                            data-width="1500" data-height="1000"
                            ></a>
                            <a href="{{ asset('storage/events/image4.jpg') }}" data-fancybox="images-preview"
                            data-width="1500" data-height="1000"
                            ></a>
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
                @auth('tenantuser')  
                <div class="text-center">
                    <p>Click here to</p>
                </div>
                <div class="row mb-3 d-flex justify-content-center">
                    <button class="btn btn-info" onclick="handleRegister({{ $event->id }})">
                        Join
                    </button>
                </div>
                @endauth
                @auth('eouser')
                    @if($event->eo_users_id == Auth::guard('eouser')->user()->id)
                    <div class="row mb-3 d-flex justify-content-center">
                        <a class="btn btn-success" href="{{ route('events.edit', $event->id) }}">
                            Edit
                        </a>
                    </div>
                    @endif
                @endauth
                @unless (Auth::guard('eouser')->check() || Auth::guard('tenantuser')->check())
                <div class="text-center">
                    <p>You must login first as tenant to Join</p>
                </div>
                <div class="row mb-3 d-flex justify-content-center">
                    <a class="btn btn-info" href="{{ route('login.tenant-user-form') }}">Login</a>
                </div>
                @endunless
                <!-- MODAL FOR FORM PARTICIPANT -->
                <div class="modal fade" id="registerParticipantModal" tabindex="-1" role="dialog" aria-labelledby="registerParticipantLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="" method="post" id="registerParticipantForm">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Registrasi Event {{ $event->title }} </h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label for="full_name"> Full Name </label>
                                        <input type="text" class="form-control" id="full_name">
                                    </div>
                                    <div class="form-group">
                                        <label for="email"> E-mail </label>
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Back</button>
                                    <button type="submit" class="btn btn-danger">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
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
                                <h5 class="card-title">{{ $event->eo_users->name }}</h5>
                                <a href="{{ route('eventorganizer.index', $event->eo_users->id) }}" class="text-info">  about Author </a>
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
                                <p> <strong>  Jl. Kh Ahmad Dahlan Blok L2 no.12, Jakarta Selatan </strong> </p>
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
            url({{asset('storage/'.$event->image)}});
        }
    </style>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script>
        function handleRegister(id)
        {
            $('#registerParticipantModal').modal('show');
        }
    </script>
@endsection
