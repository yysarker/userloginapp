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
                  <h1 class="heading">Forgotten Password</h1>
                </div>
                <div class="card-body ps-0">
                  <p>A new password has been emailed to you.</p>
                  <p>
                    If you do not receive and email please&nbsp;
                    <a href="{{ route('password.request') }}"> try again </a>&nbsp; or contact
                    support.
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <img src="{{ asset ('assets/images/emailed.svg') }}" alt="emailed image" />
            </div>
          </div>
        </div>
      </section>
    </div>
@endsection

