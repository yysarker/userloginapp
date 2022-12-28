<?php
    /**
     *  Created by PhpStorm.
     *  User: yys
     *  Date: 12/28/2022
     *  Time: 7:04 PM
     */
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta name="description" content=""/>
    <meta name="keywords" content="content"/>

    <title>@yield('title')</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('assets/images/icons/favicon.ico') }}">
    <!-- Bootstrap Icon CSS -->
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
    />

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;700;800&display=swap"
        rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset ('assets/css/style.css') }}"/>

</head>
<body>

{{--Header Part--}}
@include('layouts.menu')


<main>
    @yield('content')
</main>

<footer></footer>

<!-- Bootstrap Bundle with Popper -->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>

</body>
</html>



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
