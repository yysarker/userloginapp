@extends('layouts.signup')

@section('content')
    <div class="section-login">
        <section class="section-login--logo">
            <a href="{{ url ('/') }}">
                <img src="{{ asset ('assets/images/logo.png') }}" alt="logo" class="img-fluid"/>
            </a>
        </section>

        <section class="section-login--form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title">{{ __('Reset Password') }}</div>
                            <div class="card-body">
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf
                                    <input type="hidden" name="token" value="{{ $token }}">

                                    <div class="mt-3">
                                        <label for="email" class="form-label">{{ __('Email Address') }}</label>
                                        <input id="email" type="email"
                                               class="form-control u-box-shadow-1 @error('email') is-invalid @enderror"
                                               name="email" value="{{ $email ??  old('email') }}" required
                                               autocomplete="email"
                                               autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                             <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="mt-3">
                                        <label for="password" class="form-label">{{ __('Password') }}</label>
                                        <input id="password" type="password"
                                               class="form-control u-box-shadow-1 @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">

                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror

                                    </div>

                                    <div class="mt-3">
                                        <label for="password-confirm"
                                               class="form-label">{{ __('Confirm Password') }}</label>
                                        <input id="password-confirm" type="password"
                                               class="form-control u-box-shadow-1" name="password_confirmation" required
                                               autocomplete="new-password">
                                    </div>
                                    <div class="mt-5">
                                        <button type="submit" class="btn btn-green">{{ __('Reset Password') }}</button>
                                    </div>
                                </form>
                                <div class="back-button">
                                    <a href="{{ url ('/') }}">
                                        <i class="bi bi-arrow-left-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
