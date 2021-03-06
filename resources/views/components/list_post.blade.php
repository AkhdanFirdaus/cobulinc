@foreach($posts as $key => $post)
<div class="card-deck">
    <div class="card my-4 border-0 shadow-sm">
        <img src="{{ !$post->thumbnail ? 'https://picsum.photos/800/200' : $post->thumbnail }}" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p>{{ $post->short_description }}</p>
            <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>
@endforeach