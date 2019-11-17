@extends('layouts.app')

@section('content')
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <img src="{{ !$post->thumbnail ? 'https://picsum.photos/800/200' : $post->thumbnail }}" class="img-fluid w-100" alt="">
            <div>
                <h1 class="display-4 heading">{{ ucwords($post->title) }}</h1>
                {!! $post->content !!}
            </div>
            <hr>
        </div>
        <div class="col-md-2">
            <img src="https://picsum.photos/75" alt="Avatar" class="rounded-circle mb-3">
            <h5>{{ $post->user->name }}</h5>
            <label for="" class="badge badge-primary">{{ $post->topic->name }}</label>
            <p>{{ \Carbon\Carbon::parse($post->created_at)->toFormattedDateString() }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            @include('components.comment')
        </div>
    </div>
</div>
@endsection