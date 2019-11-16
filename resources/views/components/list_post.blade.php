@foreach($posts as $key => $post)
<div class="card-deck">
    <div class="card my-4">
        <img src="https://picsum.photos/800/200" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p>Short Description</p>
            <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>
@endforeach