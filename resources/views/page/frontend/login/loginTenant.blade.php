@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-6 col-lg-5 col-xl-5 mx-auto my-5">
        <div class="rounded" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="bg-primary px-5 pt-5 pb-3 border border-primary rounded-top" style="background: -webkit-gradient(linear, left top, right top, from(#5e02f5), to(#3e0b91));
                    background: linear-gradient(to right, #5e02f5, #3e0b91); color:#fff;">
                <h3>Tenant<br>Login</h3>
            </div>
            <div class="px-5 pb-5">
                <form action="">
                    <div class="form-group mt-3">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" placeholder="your email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" placeholder="your password">
                    </div>
                    <button class="btn btn-primary w-100 mt-1">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection