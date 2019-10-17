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
  <!--  -->
  <!-- <div class="container my-5">
    <br><br>
    <table>
      <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
      </thead>
      <tbody id="tenantList">
      <tr>
        <td>John</td>
        <td>Doe</td>
        <td>john@example.com</td>
      </tr>
      <tr>
        <td>Mary</td>
        <td>Moe</td>
        <td>mary@mail.com</td>
      </tr>
      <tr>
        <td>July</td>
        <td>Dooley</td>
        <td>july@greatstuff.com</td>
      </tr>
      <tr>
        <td>Anja</td>
        <td>Ravendale</td>
        <td>a_r@test.com</td>
      </tr>
      </tbody>
    </table>
  </div> -->

  <div class="container mb-5" id="container">

@foreach($data as $datas)
    <div class="box">
      <div class="tenant-brackets">
      <span id="tenant-category" class="badge">{{$datas->category}}</span>
        <img src="{{$datas->image_banner}}" alt="gambar" id="tenant-image" style="width:100%">
        <div id="tenantList" class="tenant-middle">
          <tr>
          <h5>{{$datas->name}}</h5>
          </tr>
          <!-- <p>INI SHORT DESKRIPSI</p> -->
          <!-- <button id="tenant-btn" class="btn" type="button">Detail</button> -->
          <a id="tenant-btn" href="/tenant/{{$datas->id}}" class="btn btn-sm" type="sumbit">Detail</a>
        </div>
      </div> 
    </div>
@endforeach

  </div>
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script>
  $(document).ready(function(){
    $("#tenantSearch").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#tenantList tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script> -->
  

  
@endsection