<header class="card-deck mb-4">
    @foreach ($topics->slice(0, 4) as $key => $topic)
        <div class="card border-0 shadow-sm">
            <div class="card-body">
                <h5 class="card-title">{{ $topic->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
            </div>
        </div>
    @endforeach
</header>
{{-- Next Berdasarkan jumlah kontributor topic --}}