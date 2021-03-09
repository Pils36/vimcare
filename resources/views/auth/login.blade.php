@extends('layouts.app')


@section('content')

@php
    $pages = 'Sign In';
@endphp


<div class="inner-banner inner-bg7">
<div class="container">
<div class="inner-title text-center">
<h3> Sign In </h3>
<ul>
<li>
<a href="{{ route('home') }}">Home</a>
</li>
<li>
<i class='bx bxs-chevron-right'></i>
</li>
<li> Sign In </li>
</ul>
</div>
</div>
</div>


<div class="sign-in-area pt-100 pb-70">
<div class="container">
<div class="row pt-45">
<div class="col-lg-12">
<div class="user-all-form">
<div class="contact-form">
<div class="section-title text-center">
<span class="span-bg">Sign In</span>
<h2>Sign In to Your Account!</h2>
</div>
<form action="{{ route('login') }}" method="POST">
    @csrf

<div class="row">
<div class="col-lg-12 ">
<div class="form-group">
<input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" required data-error="Please enter your Email" placeholder="E-mail Address" value="{{ old('email') }}" required autocomplete="email" autofocus>

@error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror

</div>
</div>
<div class="col-12">
<div class="form-group">
<input class="form-control @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
@error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
</div>
</div>
<div class="col-lg-6 col-sm-6 form-condition">
<div class="agree-label">
<input type="checkbox" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
<label for="chb1">
Remember Me
</label>
</div>
</div>



<div class="col-lg-6 col-sm-6">

    @if (Route::has('password.request'))
          <a href="{{ route('password.request') }}" class="forget">
              {{ __('Forgot Your Password?') }}
          </a>
      @endif


</div>
<div class="col-lg-12 col-md-12 text-center">
<button type="submit" class="default-btn">
Sign In Now
</button>
</div>
<div class="col-12">
<p class="account-desc">
Not a member?
<a href="{{ route('register') }}">Sign Up</a>
</p>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</div>


@endsection