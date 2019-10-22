@extends('layouts.app')
@section('title', 'Tenant')

@section('content')
  <!-- tenant content -->
  <div class="container mb-5">
    <form>
      <div class="form-row">
        <div class="col-12">
          <input id="tenantSearch" type="text" class="form-control" placeholder="Search for names..">
        </div>
      </div>
    </form>
  </div>

  <div class="container mb-5" id="container">

@foreach($data as $datas)
    <div class="box">
      <div class="tenant-brackets">
      <span id="tenant-category" class="badge">{{$datas->category}}</span>
        <img src="{{ asset('storage/'.$datas->image_banner) }}" alt="gambar" id="tenant-image" style="width:100%">
        <div id="tenantList" class="tenant-middle">
          <tr>
          <h5>{{$datas->name}}</h5>
          </tr>
          <!-- <p>INI SHORT DESKRIPSI</p> -->
          <!-- <button id="tenant-btn" class="btn" type="button">Detail</button> -->
          <a id="tenant-btn" href="{{ route('tenants.show', $datas->id) }}" class="btn btn-sm" type="sumbit">Detail</a>
        </div>
      </div> 
    </div>
@endforeach

  </div>
  

  
@endsection