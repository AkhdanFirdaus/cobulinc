  
@extends('layouts.app')

@section('content')
<<<<<<< HEAD
<link rel="stylesheet" href="{{asset('css/custom.css')}}">
<section class="login-block">
    <div class="container">
=======
<section class="login-block">
    <div class="container bg-white rounded">
>>>>>>> 1c9eb9026633b42c52d0d248fa8dfb9cff36d3db
	<div class="row">
		<div class="col-md-4 login-sec">
		    <h2 class="text-center">Login Now</h2>
		   <form class="form-login" method="POST" action="{{ route('login') }}">
           @csrf
                 <div class="form-group">
                    <label for="email" class="text-uppercase">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email x" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>
  <div class="form-group">
    <label for="password" class="text-uppercase">{{ __('Password') }}</label>
    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="" >
     @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
  
  
    <div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
      <small>{{ __('Remember Me') }}</small>
    </label>
<<<<<<< HEAD
    <a href="{{route('register')}}" class="btn btn-line">Register</a>
     
=======
      {{-- <a href="{{route('register')}}" class="btn btn-line">Register</a> --}}
>>>>>>> 1c9eb9026633b42c52d0d248fa8dfb9cff36d3db
    <button type="submit" class="btn btn-login float-right">{{ __('Login') }}</button>
  </div>
  
</form>
		</div>
		<div class="col-md-8 banner-sec">
	</div>
</div>
<<<<<<< HEAD
=======
</section>
>>>>>>> 1c9eb9026633b42c52d0d248fa8dfb9cff36d3db


@endsection