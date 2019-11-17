@extends('layouts.app')

@section('content')
<div class="container-fluid my-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <img src="{{ !$post->thumbnail ? 'https://picsum.photos/800/200' : $post->thumbnail }}" class="img-fluid w-100" alt="">
            <div>
                <h1 class="display-4 heading">{{ ucwords($post->title) }}</h1>
                <p>{!! $post->content !!}</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, id similique accusantium veritatis officia, in quas consequatur nam error eius inventore officiis! Ab doloribus, atque nemo dolorem tempore perferendis ex consequuntur nesciunt vel debitis, commodi illum officia optio temporibus asperiores totam minus, reprehenderit deserunt consequatur? Hic deleniti nulla voluptatem! Tempore, eligendi ad ipsum minus, hic sunt reprehenderit ipsa saepe illum laudantium minima! Voluptatum ducimus corporis, eaque consectetur officia hic minus velit earum amet ut temporibus animi, doloremque optio excepturi! At praesentium animi ipsa eveniet ex unde odio veniam consequuntur iure, aliquid, nobis quibusdam obcaecati fuga recusandae officia qui sequi exercitationem.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, id similique accusantium veritatis officia, in quas consequatur nam error eius inventore officiis! Ab doloribus, atque nemo dolorem tempore perferendis ex consequuntur nesciunt vel debitis, commodi illum officia optio temporibus asperiores totam minus, reprehenderit deserunt consequatur? Hic deleniti nulla voluptatem! Tempore, eligendi ad ipsum minus, hic sunt reprehenderit ipsa saepe illum laudantium minima! Voluptatum ducimus corporis, eaque consectetur officia hic minus velit earum amet ut temporibus animi, doloremque optio excepturi! At praesentium animi ipsa eveniet ex unde odio veniam consequuntur iure, aliquid, nobis quibusdam obcaecati fuga recusandae officia qui sequi exercitationem.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, id similique accusantium veritatis officia, in quas consequatur nam error eius inventore officiis! Ab doloribus, atque nemo dolorem tempore perferendis ex consequuntur nesciunt vel debitis, commodi illum officia optio temporibus asperiores totam minus, reprehenderit deserunt consequatur? Hic deleniti nulla voluptatem! Tempore, eligendi ad ipsum minus, hic sunt reprehenderit ipsa saepe illum laudantium minima! Voluptatum ducimus corporis, eaque consectetur officia hic minus velit earum amet ut temporibus animi, doloremque optio excepturi! At praesentium animi ipsa eveniet ex unde odio veniam consequuntur iure, aliquid, nobis quibusdam obcaecati fuga recusandae officia qui sequi exercitationem.</p>
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