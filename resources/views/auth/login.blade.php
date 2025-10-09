@extends('layouts.auth')
@section('content')
    <div class="d-flex justify-content-center h-100 align-items-center">
        <div class="authincation-content style-2">
            <div class="row no-gutters">
                <div class="col-xl-12 tab-content">
                    <div id="sign-up" class="auth-form tab-pane fade show active  form-validation">
                        @if(session('message'))
                            <div class="alert alert-info" role="alert">
                                {{ session('message') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="text-center mb-4">
                                <h3 class="text-center mb-2 text-black">Sign In</h3>
{{--                                <span>Your Social Campaigns</span>--}}
                            </div>
                            <div class="row mb-4" style="display: none">
                                <div class="col-xl-6 col-6">
                                    <a href="https://www.google.com/" class="btn btn-outline-light d-block social-bx">
                                        <svg width="16" height="16" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M27.9851 14.2618C27.9851 13.1146 27.8899 12.2775 27.6837 11.4094H14.2788V16.5871H22.1472C21.9886 17.8738 21.132 19.8116 19.2283 21.1137L19.2016 21.287L23.44 24.4956L23.7336 24.5242C26.4304 22.0904 27.9851 18.5093 27.9851 14.2618Z" fill="#4285F4"/>
                                            <path d="M14.279 27.904C18.1338 27.904 21.37 26.6637 23.7338 24.5245L19.2285 21.114C18.0228 21.9356 16.4047 22.5092 14.279 22.5092C10.5034 22.5092 7.29894 20.0754 6.15663 16.7114L5.9892 16.7253L1.58205 20.0583L1.52441 20.2149C3.87224 24.7725 8.69486 27.904 14.279 27.904Z" fill="#34A853"/>
                                            <path d="M6.15656 16.7113C5.85516 15.8432 5.68072 14.913 5.68072 13.9519C5.68072 12.9907 5.85516 12.0606 6.14071 11.1925L6.13272 11.0076L1.67035 7.62109L1.52435 7.68896C0.556704 9.58024 0.00146484 11.7041 0.00146484 13.9519C0.00146484 16.1997 0.556704 18.3234 1.52435 20.2147L6.15656 16.7113Z" fill="#FBBC05"/>
                                            <path d="M14.279 5.3947C16.9599 5.3947 18.7683 6.52635 19.7995 7.47204L23.8289 3.6275C21.3542 1.37969 18.1338 0 14.279 0C8.69485 0 3.87223 3.1314 1.52441 7.68899L6.14077 11.1925C7.29893 7.82856 10.5034 5.3947 14.279 5.3947Z" fill="#EB4335"/>
                                        </svg>

                                        <span class="ms-1 font-w600 label-color">Sign in with Google</span></a>
                                </div>
                                <div class="col-xl-6 col-6">
                                    <a href="https://www.apple.com/	" class="btn btn-outline-light d-block social-bx">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 456.008 560.035"><path d="M380.844 297.529c.787 84.752 74.349 112.955 75.164 113.314-.622 1.988-11.754 40.191-38.756 79.652-23.343 34.117-47.568 68.107-85.731 68.811-37.499.691-49.557-22.236-92.429-22.236-42.859 0-56.256 21.533-91.753 22.928-36.837 1.395-64.889-36.891-88.424-70.883-48.093-69.53-84.846-196.475-35.496-282.165 24.516-42.554 68.328-69.501 115.882-70.192 36.173-.69 70.315 24.336 92.429 24.336 22.1 0 63.59-30.096 107.208-25.676 18.26.76 69.517 7.376 102.429 55.552-2.652 1.644-61.159 35.704-60.523 106.559M310.369 89.418C329.926 65.745 343.089 32.79 339.498 0 311.308 1.133 277.22 18.785 257 42.445c-18.121 20.952-33.991 54.487-29.709 86.628 31.421 2.431 63.52-15.967 83.078-39.655"/></svg>
                                        <span class="ms-1 font-w600 label-color">Sign in with Apple</span></a>
                                </div>
                            </div>
                            <div class="sepertor">
                                <span class="d-block mb-4 fs-13">Login with Email</span>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Email address</label>
                                <input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" required autocomplete="email" autofocus placeholder="{{ trans('global.login_email') }}" value="{{ old('email', null) }}">

                                @if($errors->has('email'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label mb-2 fs-13 label-color font-w500">Password</label>
                                <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" required placeholder="{{ trans('global.login_password') }}">

                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                @endif
                            </div>

                            <div class="input-group mb-4">
                                <div class="form-check checkbox">
                                    <input class="form-check-input" name="remember" type="checkbox" id="remember" style="vertical-align: middle;" />
                                    <label class="form-check-label" for="remember" style="vertical-align: middle;">
                                        {{ trans('global.remember_me') }}
                                    </label>
                                </div>
                            </div>

                            @if(Route::has('password.request'))
                                <a class="text-primary float-end mb-4" href="{{ route('password.request') }}">
                                    {{ trans('global.forgot_password') }}
                                </a><br>
                            @endif
                            <button type="submit" class="btn btn-block btn-primary">
                                {{ trans('global.login') }}
                            </button>

                        </form>
                        <div class="new-account mt-3 text-center">
{{--                            <p class="font-w500">Already have an account? <a class="text-primary" href="#sign-in" data-toggle="tab">Sign in</a></p>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
