@extends('layouts.admin')

@section('title')
    Admin Attention
@endsection

@section('content')
<div class="card card-default">
    <div class="card-body">
        @include('partials.error')
        <form action="{{ isset($eventCategory) ? route('events-categories.update', $eventCategory->id) : route('events-categories.store') }}" method="post">
            @csrf
            @if(isset($eventCategory))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{isset($eventCategory) ? $eventCategory->name : old('name') }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    {{isset($eventCategory) ? 'Update Category' : 'Add Category'}}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('title_content')
    {{ isset($eventCategory) ? 'Edit Category' : 'Create Category'  }}
@endsection