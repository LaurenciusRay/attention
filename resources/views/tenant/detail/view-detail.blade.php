@extends('layouts.app')
@section('title', 'Tenant')

@section('content')

<div class="container">
@if($data->count() > 0 )
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
          <a href="{{ route('products.edit', $datas->id) }}" class="btn btn-outline-info btn-sm">
            Ubah
          </a>
          <button type="button" class="btn btn-outline-danger btn-sm" onclick="handleDelete({{ $datas->id }})" >
            Delete
          </button>
        </td>
      </tr>
    </tbody>
    @endforeach
  </table>
  <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <form action="" method="post" id="deleteProductForm">
        @csrf
        @method('delete')
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p class="text-center">
              Are you sure you want to delete this Product ?
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">No, Go back</button>
            <button type="submit" class="btn btn-danger">Yes, Delete</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  @else
  <h3 class="text-center">No Product Yet</h3>
  @endif
</div>

@endsection

@section('script')
<script type="text/javascript">
  // Show Image Preview
  function readURL(input) {
    if (input.files && input.files[0]) {
      var reader = new FileReader();

      reader.onload = function (e) {
        $('#product-img-tag').attr('src', e.target.result);
      }
      reader.readAsDataURL(input.files[0]);
    }
  }
  $("#image").change(function () {
    readURL(this);
  });
  function handleDelete(id) {
        
        var form = document.getElementById('deleteProductForm')
        form.action = '/products/' + id
        $('#deleteModal').modal('show')
    }
</script>
@endsection