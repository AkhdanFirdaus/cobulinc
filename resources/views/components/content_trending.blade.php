<header class="card-deck mb-4">
    @foreach ($topics->slice(0, 4) as $key => $topic)
        <div class="card border-0 shadow-sm">
            <div class="card-body text-center">
                <h5>{{ strtoupper($topic->name) }}</h5>
            </div>
        </div>
    @endforeach
</header>
{{-- Next Berdasarkan jumlah kontributor topic --}}