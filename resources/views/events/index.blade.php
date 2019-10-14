@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            @foreach($event as $e)
            <div class="col-sm-6">
                <div class="card" style="width: 18rem;">
                    <div class="wrapper">
                        <img class="card-img-top" src="{{asset('storage/'.$e->image)}}" alt="Card image cap" width="100%">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{$e->title}}</h5>
                        <p class="card-text">{{$e->description}}</p>
                        <a href="{{ route('events.show', $e->id) }}" class="btn btn-primary">Link</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>   
@endsection
@section('css_link')
<link href="{{asset('css/events/style.css')}}" rel="stylesheet" type="text/css" />
@endsection