@extends('layouts.admin')

@section('title')
    Admin Attention
@endsection

@section('content')
<div class="card card-default">
    <div class="card-body">
        @include('partials.error')
        <form action="{{ isset($eoDetailCategory) ? route('events-categories.update', $eoDetailCategory->id) : route('events-categories.store') }}" method="post">
            @csrf
            @if(isset($eoDetailCategory))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" id="name" class="form-control" name="name" value="{{isset($eoDetailCategory) ? $eoDetailCategory->name : old('name') }}">
            </div>
            <div class="form-group">
                <button class="btn btn-success">
                    {{isset($eoDetailCategory) ? 'Update Category' : 'Add Category'}}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

@section('title_content')
    {{ isset($eoDetailCategory) ? 'Edit Category' : 'Create Category'  }}
@endsection