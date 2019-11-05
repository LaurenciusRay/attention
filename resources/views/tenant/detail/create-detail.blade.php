@extends('layouts.app')
@section('title', 'Tenant')

@section('content')
<div class="container">
    <div class="card card-default mb-5">
        <div class="card-header">
            Add Products
        </div>
        <div class="card-body">
            <!-- @include('partials.error') -->
            <form action="{{ isset($data) ? route('products.update', $data->id) : route('products.store') }}" method="post" enctype="multipart/form-data">
                @if(isset($data))
                    @method('PUT')
                @endif
                @csrf
                {{ Form::hidden('user_id', Auth::guard('tenantuser')->user()->id) }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value="{{ isset($data) ? $data->title : old('title') }}">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" class="form-control" value="{{ isset($data) ? $data->price : old('price') }}">
                </div>
                <div class="form-group">
                    <label for="image"> Image </label>
                    <input type="file" style="padding-bottom:37px" class="form-control" id="image" name="image">
                </div>
                <div class="form-group row">
                    <img src=" {{ asset('storage/'. $data->image) }}" id="product-img-tag" name="img-tag" width="200px" />
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">
                        {{ isset($data) ? 'Edit Product' : 'Upload Product' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
    // Show Image Preview
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#product-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function() {
        readURL(this);
    });
</script>
@endsection