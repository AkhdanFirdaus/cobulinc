<div class="list-group border-0 shadow-sm">
  <a href="#" class="list-group-item list-group-item-action active">Post Saya</a>
  @foreach(Auth::user()->posts as $key => $userpost)
    <a href="{{ route('post.show', $userpost->slug) }}" class="list-group-item list-group-item-action">{{ $userpost->title }}</a>
  @endforeach
</div>

