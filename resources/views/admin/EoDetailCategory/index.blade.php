@extends('layouts.admin')

@section('title')
Admin Attention
@endsection
@section('search_bar')
<div class="search-element">
    <input class="form-control" type="search" placeholder="Search" aria-label="Search" data-width="250">
    <button class="btn" type="submit"><i class="fas fa-search"></i></button>
</div>
@endsection
@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('events-categories.create')}}" class="btn btn-success">Add Category</a>
</div>
<div class="card card-default">
    <div class="card-body">
        @if($eoDetailCategory->count() > 0)
        <table class="table">
            <thead>
                <th>No</th>
                <th>Name</th>
                <th></th>
            </thead>
            <tbody>
                @foreach($eoDetailCategory as $eoDc)
                <tr>
                    <td>
                        <strong> {{$loop->iteration}} </strong>
                    </td>
                    <td>
                        <strong> {{$eoDc->name}} </strong>
                    </td>
                    <td>
                        <div class="row d-flex justify-content-end">
                            <a href="{{ route('events-categories.edit', $eoDc->id) }}" class="btn btn-info mr-1">
                                Edit
                            </a>
                            <button class="btn btn-danger" href="">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        <h3 class="text-center">No Category Yet</h3>
        @endif
    </div>
</div>
@endsection

@section('title_content')
Event Categories
@endsection