@foreach($posts as $key => $post)
<div class="card-deck">
    <div class="card my-4">
        <img src="https://picsum.photos/800/200" class="card-img-top" alt="">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus, odit quam! Eligendi, non
                voluptas! Illum, architecto rem! Eveniet tempora obcaecati pariatur. Error fuga porro qui? Assumenda
                velit ex aut ad.</p>
            <a href="{{ route('singlepost') }}" class="btn btn-primary">Read More</a>
        </div>
    </div>
</div>
@endforeach