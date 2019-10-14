@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card card-default mb-5">
        <div class="card-header">
            Create Events
        </div>
        <div class="card-body">
            <form action="" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group">
                    <label for="image"> Image </label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="start_date"> Start Date </label>
                    <input type="text" class="form-control" id="start_date" name="start_date" value="">
                </div>
                <div class="form-group">
                    <button class="btn btn-success">
                        Create Event
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
