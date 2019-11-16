<header class="card-deck mb-4">
    @foreach ($topics->slice(0, 4) as $key => $topic)
        <div class="card text-white">
            <img src="https://picsum.photos/200/150/?blur" class="card-img" alt="...">
            <div class="card-img-overlay">
                <h5 class="card-title">{{ $topic->name }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
        </div>
    @endforeach
</header>
{{-- Next Berdasarkan jumlah kontributor topic --}}