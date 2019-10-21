@extends('layouts.admin')

@section('title')
    Admin Attention
@endsection

@section('content')
<div class="d-flex justify-content-end mb-2">
    <a href="{{route('events-categories.create')}}" class="btn btn-success">Add Category</a>
</div>
<div class="card card-default">
    <div class="card-header">
        Categories
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <th>No</th>
                <th>Name</th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <strong>1.</strong>
                    </td>
                    <td>
                        <strong> Contoh Category </strong>
                    </td>
                    <td>
                        <div class="row d-flex justify-content-end">
                            <button class="btn btn-info mr-1">
                                Edit
                            </button>
                            <button class="btn btn-danger">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('title_content')
    Event Categories
@endsection