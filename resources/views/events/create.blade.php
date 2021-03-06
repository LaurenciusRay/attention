@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card card-default mb-5">
        <div class="card-header">
            {{ isset($event) ? 'Edit Event' : 'Create Event'}}
        </div>
        <div class="card-body">
            @include('partials.error')
            <form action="{{ isset($event) ? route('events.update', $event->id) : route('eouser.events.store') }}"
                method="post" enctype="multipart/form-data">
                @csrf
                @if(isset($event))
                @method('PUT')
                @endif
                {{ Form::hidden('user_id', Auth::guard('eouser')->user()->id) }}
                <!-- Input field 1 -->
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" id="title" name="title" class="form-control"
                        value="{{ isset($event) ? $event->title : old('title') }}">
                </div>
                <!-- Input field 2 -->
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="hidden" id="description" name="description"
                        value=" {{ isset($event) ? $event->description : old('description') }} ">
                    <trix-editor input="description"></trix-editor>
                </div>
                <!-- Input field 3 -->
                <div class="form-group">
                    <label for="start_date"> Start Date </label>
                    <input type="text" class="form-control" id="start_date" name="start_date"
                        value=" {{isset($event) ? $event->start_date : old('start_date')}} ">
                </div>
                <!-- Input field 4 -->
                <div class="form-group">
                    <label for="end_date"> End Date </label>
                    <input type="text" class="form-control" id="end_date" name="end_date"
                        value=" {{isset($event) ? $event->end_date : old('end_date')}} ">
                </div>
                <!-- Input field 5 -->
                <div class="form-group">
                    <label for="capacity"> Capacity </label>
                    <input type="number" class="form-control" id="capacity" name="capacity" min="1" max="100" step="1"
                        value={{ isset($event) ? $event->capacity : old('capacity') }}>
                </div>
                <!-- Input field 6 -->
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        <option value="">Default</option>
                        @foreach($eventCategories as $category)
                        <option value="{{ $category->id }}" 
                            @if(isset($event)) 
                                @if($category->id ==
                                    $event->eo_detail_categories_id)
                                        selected
                                @endif
                            @endif
                            >
                            {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>
                <!-- Input field 7 -->
                <div class="form-group">
                    <label for="image"> Image </label>
                    <input type="file" style="padding-bottom:37px" class="form-control" id="image" name="image"
                        value={{isset($event) ? $event->image : ''}}>
                </div>
                <div class="form-group">
                    <img src=" {{ isset($event) ? asset('storage/'. $event->image) : ''}}" id="event-img-tag"
                        name="img-tag" width="200px" />
                </div>
                <!-- Input field 8 (test) -->
                <div class="form-group">
                    <label for="images">
                        <p>Add Image for your Gallery (can attach more than one image)</p>
                        <span class="btn btn-info">Add</span>
                        <input type="file" multiple="multiple" id="images" name="images[]" style="display:none">
                    </label>
                </div>
                <div class="mb-3" id="image_preview"></div>
                <div class="form-group">
                    <label for="imagelayout">
                        <span class="btn btn-info">Add Image Booth Layout</span>
                        <input type="file" id="imagelayout" name="image_layout" style="display:none">
                    </label>
                </div>
                <div class="form-group">
                    <img src="" id="event-img-tag-layout" name="img-tag" width="200px" />
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-success">
                        {{ isset($event) ? 'Edit' : 'Add Booth'}}
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
<link rel="stylesheet" href="{{ asset('css/events/style.css') }}">
@endsection
@section('script')
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<script type="text/javascript">
    // Show Image Preview
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#event-img-tag').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#image").change(function () {
        readURL(this);
    });
    $("#images").change(function () {
        $('#image_preview').html("");
        var total_file = document.getElementById("images").files.length;
        for (var i = 0; i < total_file; i++) {
            $('#image_preview').append("<img src='" + URL.createObjectURL(event.target.files[i]) + "'>");
        }
    });

    // Flatpickr
    function readURLayout(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#event-img-tag-layout').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#imagelayout").change(function() {
        readURLayout(this);
    });
</script>
<!-- Flatpickr -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
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