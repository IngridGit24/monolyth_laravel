<section class="mb-4">
    <div class="container">
        <form method="GET" action="{{ route('home') }}">
            <div class="row g-2">
                <div class="col-md-10">
                    <input
                        type="text"
                        name="q"
                        class="form-control form-control-lg"
                        placeholder="Search phones or watches..."
                        value="{{ request('q') }}"
                    >
                </div>
                <div class="col-md-2 d-grid">
                    <button class="btn btn-primary btn-lg" type="submit">
                        Search
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
