<?php
    /**
     *  Created by PhpStorm.
     *  User: yys
     *  Date: 12/28/2022
     *  Time: 7:04 PM
     */
?>
@extends('layouts/signup')

@section('content')
<div class="section-register">
    <section class="section-register--left">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title">Benefits of joining:</h1>
                <ul class="card-text">
                    <li>Over 6,000 Proven Writers</li>
                    <li>Powerful Content Creation Tools</li>
                    <li>Easy-to-Use Platform</li>
                    <li>Fast Turnaround</li>
                    <li>Pay as You Go</li>
                    <li>Quality Guaranteed!</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="section-register--right">
        <h2 class="heading mb-5">{{ __ ('Create Your Free Account') }}</h2>
        <p class="heading--sub mb-4 d-inline">
            {{ __ ('High-quality content written on demand by the') }}
            <span class="green">{{ __ ("web's best writers.") }} </span>
        </p>
        <p>
            {{ __ ("Sign up is easy and free. You don't pay anything until you're ready to order content.") }}
        </p>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mt-3">
                <label for="name" class="form-label">{{ __ ('First Name') }}</label>
                <input id="name" type="text" class="form-control u-box-shadow-1 @error('name') is-invalid @enderror"
                       name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                @error('name')
                <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mt-3">
                <label for="email" class="form-label">{{ __ ("Email") }}</label>
                <input id="email" type="email"
                       class="form-control u-box-shadow-1 @error('email') is-invalid @enderror" name="email"
                       value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mt-3">
                <label for="password" class="form-label">{{ __ ("Password") }}</label>
                <input id="password" type="password"
                       class="form-control u-box-shadow-1 @error('password') is-invalid @enderror" name="password"
                       required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="mt-3">
                <label for="password-confirm"
                       class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" class="form-control"
                       name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="mt-5">
                <button type="submit" class="btn btn-blue">{{ __ ('Sign Up') }}</button>
            </div>
        </form>
        <p class="privacy-links mt-5">
            {{ __ ('I agree to the') }}&nbsp;
            <a href="#"> {{ __ ('Terms & Conditions ') }} </a>
            &nbsp;{{ __ ('and') }}&nbsp;
            <a href="#">{{ __ ('Privacy Policy.') }}</a>
        </p>
        <p class="login-link mt-5">
            {{ __ ('Already have an account?')}}&nbsp;
            <a href="{{ url ('login') }}"> {{ __ ('Sign in') }} </a>
        </p>
    </section>
</div>

@endsection




