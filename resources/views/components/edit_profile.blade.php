@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Edit Profile</h2>
    <hr>
    <form action="">
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" placeholder="Your name">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-6">
                <input type="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="form-group row">
            <label for="" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-6">
                <input type="password" class="form-control" placeholder="Password">
            </div>
        </div>
        <button type="reset" class="btn togglekonten"><i class="fa fa-times"></i> CANCEL</button>
        <button type="submit" class="btn btn-primary"><i class="fas fa-check"></i> SUBMIT</button>
    </form>
</div>
@endsection