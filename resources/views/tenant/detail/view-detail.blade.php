@extends('layouts.app')
@section('title', 'Tenant')

@section('content')

<div class="container">

<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Title</th>
      <th scope="col">Image</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  @foreach($data as $datas)
  <tbody>
    <tr>
      <th scope="row">{{$datas->id}}</th>
      <td>{{$datas->title}}</td>
      <td><img style="width:100px" src="{{asset('storage/'.$datas->image)}}" alt="products image"></td>
      <td>{{$datas->price}}</td>
      <td>  
        <a href="/products/{{$datas->id}}"><button class="btn btn-outline-info btn-sm">Edit</button></a> 
        <button class="btn btn-outline-danger btn-sm"><a href="/products/{$datas->id}"></a> Delete</button>
      </td>
      
    </tr>
  </tbody>
  @endforeach

</table>


</div>

@endsection