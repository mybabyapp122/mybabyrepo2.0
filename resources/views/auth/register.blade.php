@extends('layouts.auth')

@section('content')
<div class="d-flex justify-content-center h-100 align-items-center">
    <div class="authincation-content style-2">
        <div class="row no-gutters">
            <div class="col-xl-12 tab-content">
                <div id="sign-up" class="auth-form tab-pane fade show active form-validation">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="text-center mb-4">
                            <h3 class="text-center mb-2 text-black">Sign Up</h3>
                            <span>Create your account</span>
                        </div>
                        
                        <div class="sepertor">
                            <span class="d-block mb-4 fs-13">Sign up with email</span>
                        </div>
                        
                        <div class="mb-3">
                            <label for="name" class="form-label mb-2 fs-13 label-color font-w500">Name</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="email" class="form-label mb-2 fs-13 label-color font-w500">Email address</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password" class="form-label mb-2 fs-13 label-color font-w500">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label mb-2 fs-13 label-color font-w500">Confirm Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        
                        <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                    </form>
                    
                    <div class="new-account mt-3 text-center">
                        <p class="font-w500">Already have an account? <a class="text-primary" href="{{ route('login') }}">Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
