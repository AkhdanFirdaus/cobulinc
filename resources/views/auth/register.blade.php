@extends('layouts.app')
@section('content')
<<<<<<< HEAD


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
=======
<section class="testimonial py-5" id="testimonial">
    <div class="container">
        <div class="row ">
            <div class="col-md-4 py-5 text-black text-center " style="background-color:white">
                <div class=" ">
                    <div class="card-body">
                        <img src="{{asset('img/undraw_fill_forms_yltj.svg')}}" style="width:100%;">
                        <h2 class="py-3">Registration</h2>
                        <p>if you want to join you can create account in here
>>>>>>> frontend_farhan

</p>
                    </div>
                </div>
            </div>
            <div class="col-md-8 py-5" style="background-color:white;">
                <h4 class="pb-4">Please fill with your details</h4>
                <form method="POST" action="{{ route('register') }}">
                @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Name">

                        @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group col-md-6">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                      </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>
                        <div class="form-group col-md-6">   
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>
                        <!-- <div class="form-group col-md-12">  
                                  <textarea id="comment" name="comment" cols="40" rows="5" class="form-control"></textarea>
                        </div>
                    </div> -->
                    <!-- <div class="form-row">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="form-check">
                                  <input class="form-check-input" type="checkbox" value="" id="invalidCheck2" required>
                                  <label class="form-check-label" for="invalidCheck2">
                                    <small>By clicking Submit, you agree to our Terms & Conditions, Visitor Agreement and Privacy Policy.</small>
                                  </label>
                                </div>
                              </div>
                    
                          </div>
                    </div> -->
                    
                    <div class="form-row">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
