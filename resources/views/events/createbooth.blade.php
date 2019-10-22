@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card card-default mb-5">
        <div class="card-header">
            Create Events
        </div>
        <div class="card-body">
            @include('partials.error')
            <form action="{{ route('events.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control" value=" {{old('title')}} ">
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="hidden" id="description" name="description" value=" {{old('description')}} ">
                    <trix-editor input="description"></trix-editor>
                </div>
                <div class="form-group">
                    <label for="start_date"> Start Date </label>
                    <input type="text" class="form-control" id="start_date" name="start_date" value=" {{old('start_date')}} ">
                </div>
                <div class="form-group">
                    <label for="end_date"> End Date </label>
                    <input type="text" class="form-control" id="end_date" name="end_date" value=" {{old('end_date')}} ">
                </div>
                <div class="form-group">
                    <label for="capacity"> Capacity </label>
                    <input type="number" class="form-control" id="capacity" name="capacity" min="1" max="200" step="1" value=" {{old('capacity')}} ">
                </div>
                <div class="form-group">
                    <label for="image">
                        <span class="btn btn-info">Add Image</span>
                        <input type="file" id="image" name="image" style="display:none">
                    </label>
                </div>
                <div class="form-group">
                    <img src="" id="event-img-tag" name="img-tag" width="200px" />
                </div>
                <div class="form-group">
                    <label for="imagelayout">
                        <span class="btn btn-info">Add Image Layout</span>
                        <input type="file" id="imagelayout" name="imagelayout" style="display:none">
                    </label>
                </div>
                <div class="form-group">
                    <img src="" id="event-img-tag-layout" name="img-tag" width="200px" />
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">
                        Add Booth
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('css_link')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<!-- Show Image Preview -->
<script type="text/javascript">
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#event-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function readLayout(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#event-img-tag-layout').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function() {
        readURL(this);
    });
    $("#imagelayout").change(function() {
        readLayout(this);
    });
</script>
<!-- Flatpickr -->
<script>
    flatpickr('#start_date', {
        enableTime: true,
        enableSeconds: true
    })
    flatpickr('#end_date', {
        enableTime: true,
        enableSeconds: true
    })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.0/trix.js"></script>
@endsection