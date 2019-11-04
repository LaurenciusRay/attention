@extends('layouts.app')

@section('content')
<div class="container">
    <h4>This is sample page</h4>
    <h4>Welcome {{ Auth::guard('eouser')->user()->name }}</h4>    
</div>
@endsection