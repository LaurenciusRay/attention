@extends('layouts.app')
@section('title', 'Tenant')

@section('content')
  <!-- tenant content -->
  <div class="container mb-5">
    <form class="input-group mb-3" action="" method="GET">
      <input type="text" class="form-control mr-2" name="search" placeholder="Search for.."
            value="{{ request()->query('search') }}">
        <span class="input-group-btn">
            <button class="btn btn-search" type="submit"><i class="fa fa-search fa-fw"></i> Search</button>
        </span>
    </form>
  </div>
<div class="container mb-5" id="container">

  @foreach($data as $datas)
  <div class="box">
    <div class="tenant-brackets">
      <span id="tenant-category" class="badge">{{$datas->category}}</span>
      <img src="{{ asset('storage/'.$datas->image_banner) }}" alt="gambar" id="tenant-image" style="width:100%">
      <!-- <img id="tenant-image" src="https://ecs7.tokopedia.net/img/cache/700/product-1/2018/7/3/8584561/8584561_2971a63e-ab6b-479f-94c9-f402b1d80cf4_720_720.jpg" alt=""> -->
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
</div>
</div>
@endforeach
</div>
<div class="row d-flex justify-content-center my-2">
        {{ $data->appends(['search' => request()->query('search')])->links() }}
  </div>
@endsection

@section('css_link')
<link href="{{asset('css/events/eventlist.css')}}" rel="stylesheet" type="text/css" />
@endsection