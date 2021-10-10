@extends('auth.login_layout')
@section('content')
<div class="col-12 col-xl-5 p-0 p-md-5">
    <div class="card bg-blue p-4">
        <div class="text-center">
            <h4 class="text-uppercase">My Blog</h4>
            <br>
            <h4>Log In</h4>
            <hr>
        </div>
        <div class="card-body">
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="mb-4">
                    <label for="email" class="mb-2">Email</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="password" class="mb-2">Password</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <button class="btn bg-button w-100 mb-4">Login</button>
                <div class="text-center">
                    <h5>Sign in with</h5>
                    <div class="d-flex justify-content-center mb-4">
                        <i class="feather-facebook signup-icon"></i>
                        <i class="feather-instagram signup-icon"></i>
                        <i class="feather-twitter signup-icon"></i>
                    </div>
                    <p>
                        Not Yet Registered? Create account <a href="{{route('register')}}">here</a>
                    </p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
