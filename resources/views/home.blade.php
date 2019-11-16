@extends('layouts.app')

@section('content')
<div class="container">
    @include('components.content_trending')
    <div class="row">
        <div class="col-md-8">
            @include('components.create_post')
            @include('components.post')
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
