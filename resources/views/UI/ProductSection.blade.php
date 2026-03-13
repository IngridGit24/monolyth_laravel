<section class="mb-5">
    <div class="container">
        <h2 class="h4 mb-3">Featured Phones</h2>
        @if ($phones->isEmpty())
            <p class="text-muted">No phones available yet.</p>
        @else
            <div class="row g-3 mb-4">
                @foreach ($phones as $phone)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-1">
                                    {{ $phone->phone_brand }} {{ $phone->phone_model }}
                                </h5>
                                <p class="text-muted mb-2">
                                    {{ $phone->phone_storage }} • {{ $phone->phone_ram }}
                                </p>
                                <p class="fw-bold mb-2">
                                    ${{ number_format($phone->phone_price, 2) }}
                                </p>
                                <p class="small text-muted mb-3">
                                    {{ Str::limit($phone->description, 80) }}
                                </p>
                                <a href="{{ route('phones.index') }}" class="btn btn-sm btn-outline-primary">
                                    Manage Phones
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif

        <h2 class="h4 mb-3 mt-4">Featured Watches</h2>
        @if ($watches->isEmpty())
            <p class="text-muted">No watches available yet.</p>
        @else
            <div class="row g-3">
                @foreach ($watches as $watch)
                    <div class="col-md-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title mb-1">
                                    {{ $watch->brand }} {{ $watch->model }}
                                </h5>
                                <p class="text-muted mb-2">
                                    {{ $watch->strap_material }} • {{ $watch->water_resistance }}
                                </p>
                                <p class="fw-bold mb-2">
                                    ${{ number_format($watch->price, 2) }}
                                </p>
                                <p class="small text-muted mb-3">
                                    {{ Str::limit($watch->description, 80) }}
                                </p>
                                <a href="{{ route('watches.index') }}" class="btn btn-sm btn-outline-primary">
                                    Manage Watches
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
</section>
