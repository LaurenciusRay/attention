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
            <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                {{ Form::hidden('user_id', Auth::guard('tenantuser')->user()->id) }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="price">Price</label>
                    <input type="number" id="price" name="price" class="form-control">
                </div>
                <div class="form-group">
                    <label for="image"> Image </label>
                    <input type="file" style="padding-bottom:37px" class="form-control" id="image" name="image">
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">
                        Upload Products
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection