<section class="py-5 mb-4 bg-dark text-light rounded-3">
    <div class="container d-flex flex-column flex-md-row align-items-center">
        <div class="flex-grow-1">
            <h1 class="display-5 fw-bold mb-3">Your one‑stop shop for phones & watches</h1>
            <p class="lead mb-4">
                Discover the latest smartphones and elegant watches in one simple dashboard.
                Manage your inventory, compare devices, and keep your catalog always up to date.
            </p>
            <div class="d-flex flex-wrap gap-2">
                <a href="{{ route('phones.index') }}" class="btn btn-primary btn-lg">Manage Phones</a>
                <a href="{{ route('watches.index') }}" class="btn btn-outline-light btn-lg">Manage Watches</a>
            </div>
        </div>
        <div class="mt-4 mt-md-0 ms-md-5 text-center">
            <span class="badge bg-primary mb-2">New</span>
            <p class="mb-0">Centralized inventory for all your devices.</p>
        </div>
    </div>
</section>
