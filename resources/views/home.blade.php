@extends('layouts.app')

@section('content')
<div class="container">
    @include('components.content_trending')
    <div class="row">
        <div class="col-md-8">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
            @include('components.create_post')
            <h2 class="heading mt-3">Semua Artikel - <small class="badge badge-primary">{{ $posts->count() }}</small></h2>
            @include('components.list_post')
            {{ $posts->links() }}
        </div>
        <div class="col-md-4">
            @include('components.list_community')
            @include('components.mycommunity')
        </div>
        
    </div>
</div>
@endsection
