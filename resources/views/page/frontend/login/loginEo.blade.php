@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-6 col-lg-5 col-xl-5 mx-auto my-5">
        <div class="rounded" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="bg-primary px-5 pt-5 pb-3 border border-primary rounded-top" style="background: -webkit-gradient(linear, left top, right top, from(#5e02f5), to(#3e0b91));
                    background: linear-gradient(to right, #5e02f5, #3e0b91); color:#fff;">
                <h3>Event Organizer<br>Login</h3>
            </div>
            <div class="px-5 pb-5">
                <form method="POST" action="{{ route('login.eo-user') }}">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="inputEmail">Email</label>
                        <input id="inputEmail" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input id="inputPassword" name="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="password">
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-1">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection