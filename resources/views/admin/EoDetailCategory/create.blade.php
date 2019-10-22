@extends('layouts.admin')

@section('title')
    Admin Attention
@endsection

@section('content')
<div class="card card-default">
    <div class="card-header">
        Create Categories
    </div>
    <div class="card-body">
        @include('partials.error')
        <form action="{{ route('events-categories.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name">
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    Add Category
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('title_content')
    Create Categories
@endsection