@extends('layouts.app')

@section('content')
<div class="container">
    @include('components.content_trending')
    <div class="row">
        <div class="col-md-8">
            @include('components.create_post')
            <div class="card-deck">
                @include('components.list_post')
            </div>
        </div>
        <div class="col-md-4">
            @include('components.list_community')
            @include('components.mycommunity')
        </div>
    </div>
</div>
@endsection
