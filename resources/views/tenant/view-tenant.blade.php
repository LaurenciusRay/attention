@extends('layouts.app')
@section('title', 'Tenant')

@section('content')
  <!-- tenant content -->
  <div class="container" id="container">

@foreach($data as $datas)
    <div class="box">
      <div class="tenant-brackets">
        <img src="{{$datas->image_banner}}" alt="kucing" id="tenant-image" style="width:100%">
        <div class="tenant-middle">
          <h5>{{$datas->name}}</h5>
          <p>SKUY JOIN</p>
          <button id="tenant-btn" class="btn" type="button">Detail</button>
        </div>
      </div>  
    </div>
@endforeach

  </div>

  

  
@endsection