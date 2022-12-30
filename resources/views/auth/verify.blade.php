@extends('layouts.signup')

@section('content')
<div class="section-password-request">
    <section class="section-password-request--logo">
        <a href="{{ url('/') }}">
            <img src="{{ asset ('assets/images/logo.png') }}" alt="logo" class="img-fluid" />
        </a>
    </section>

    <section class="section-password-request--details">
        <div class="container">
            <div class="row align-items-center bg-white p-5">
                <div class="col-md-6 p-5">
                    <div class="card border-0">
                        <div class="card-title justify-content-start">
                            <h1 class="heading">{{__('Verify Your Email Address')}}</h1>
                        </div>
                        <div class="card-body ps-0">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif
                            <p>{{ __('Before proceeding, please check your email for a verification link.') }}</p>
                            <p>{{ __('If you did not receive the email') }},
                                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                                </form></p>&nbsp;
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{ asset ('assets/images/emailed.svg') }}" alt="emailed image" />
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
