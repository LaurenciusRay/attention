@extends('layouts.app')
@section('content')
<section id="header" class="text-light">
    <div class="layer">
        <div class="container">
            <div class="row h-100">
                <div class="col-sm-6">
                    <h2> <strong> {{ $data->name }} </strong> </h2>
                </div>
                <div class="col-sm-6">
                    <div class="row d-flex justify-content-end">
                        <button href="{{ asset('storage/events/photo-1521358522799-ad7a75d9e346.jpg') }}" class="btn btn-danger btn-sm" data-fancybox="images-preview" data-thumbs='{"autoStart":true}'>
                            View Gallery
                        </button>
                        <div style="display:none;">
                            <a href="{{ asset('storage/events/photo-1506112573664-1a1b66d93ff3.jpg') }}" data-fancybox="images-preview"
                            data-width="1500" data-height="1000"
                            ></a>
                            <a href="{{ asset('storage/events/photo-1496304841270-2cb66cf766b4.jpg') }}" data-fancybox="images-preview"
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
            <div class=col-md-6>
                <h5>Deskripsi</h5>
            
                 <div class="card px-3">
                 <a class="label label-default" href="#">Kategori:{{ $data->category}}</a>
           
                        <p> {!! $data->description !!} </p> 
                </div>
            </div>
            <div class=col-md-6>
                <h5>Alamat</h5>
                 <div class="card px-3">
                        <p> {!! $data->description !!} </p>
                </div>

            </div>
        </div>

        <hr>
        <h6>Product</h6>

        <div class="row">
        @foreach($productSelection as $pSel)
            
                <div class="col-md-3">
                    <div class="card" style="max-width:18em">
                    <div class="card-header">
                        {{ $pSel->title }}
                    </div>
                    <div class="card-body text-center">
                        <img src="{{ asset('storage/'.$pSel->image) }}" style="max-width:15em;max-height:8em" alt="">
                    </div>
                </div>
                </div>
            
        @endforeach
        </div>
        
    </div>
    </div>

</section>
<br>
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
            url({{asset('storage/'.$data->image_banner)}});
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
