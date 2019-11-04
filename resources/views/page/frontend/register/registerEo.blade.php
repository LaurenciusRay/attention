@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-6 col-lg-5 col-xl-5 mx-auto my-5">
        <div class="rounded" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div class="bg-primary px-5 pt-5 pb-3 border border-primary rounded-top" style="background: -webkit-gradient(linear, left top, right top, from(#5e02f5), to(#3e0b91));
                    background: linear-gradient(to right, #5e02f5, #3e0b91); color:#fff;">
                <h3>Event Organizer<br>Register</h3>
            </div>
            <div class="px-5 pb-5">
                <form method="POST" action="{{ route('regist.eo-user') }} " enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mt-3">
                        <label for="inputName">Name</label>
                        <input id="inputName" name="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="your name or organization name" value="{{ old('name') }}">
                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="inputPhoto">Photo or Organization Logo</label>
                        <div class="custom-file">
                            <input name="photo" type="file" class="custom-file-input @error('photo') is-invalid @enderror" id="inputPhoto">
                            <label class="custom-file-label" for="inputPhoto">Choose file...</label>
                            @if ($errors->has('photo'))
                            <span class="help-block ">
                                <strong>{{ $errors->first('photo') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <label for="inputEmail">Email</label>
                        <input id="inputEmail" name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="your email or organization email" value="{{ old('email') }}">
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
                    <div class="form-group">
                        <label for="inputDescription">Description</label>
                        <textarea id="inputDescription" name="description" class="form-control @error('description') is-invalid @enderror" rows="3" placeholder="description about you or your organization">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                        <span class="help-block">
                            <strong>{{ $errors->first('description') }}</strong>
                        </span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-primary w-100 mt-1">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.js"></script>

<script>
    $(document).ready(function() {
        bsCustomFileInput.init()
    })
</script>
@endsection