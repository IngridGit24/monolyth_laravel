@extends('Layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Update Phone</h1>
        <a href="{{ route('phones.index') }}" class="btn btn-secondary">Back to Dashboard</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('phones.update', $phone->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Brand</label>
                        <input type="text" name="phone_brand" class="form-control"
                               value="{{ old('phone_brand', $phone->phone_brand) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Model</label>
                        <input type="text" name="phone_model" class="form-control"
                               value="{{ old('phone_model', $phone->phone_model) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Storage</label>
                        <input type="text" name="phone_storage" class="form-control"
                               value="{{ old('phone_storage', $phone->phone_storage) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">RAM</label>
                        <input type="text" name="phone_ram" class="form-control"
                               value="{{ old('phone_ram', $phone->phone_ram) }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Price</label>
                        <input type="number" step="0.01" name="phone_price" class="form-control"
                               value="{{ old('phone_price', $phone->phone_price) }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Color</label>
                        <input type="text" name="phone_color" class="form-control"
                               value="{{ old('phone_color', $phone->phone_color) }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Weight (g)</label>
                        <input type="number" step="0.01" name="phone_weight" class="form-control"
                               value="{{ old('phone_weight', $phone->phone_weight) }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Dimensions</label>
                        <input type="text" name="phone_dimensions" class="form-control"
                               value="{{ old('phone_dimensions', $phone->phone_dimensions) }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Features</label>
                        <textarea name="phone_features" class="form-control" rows="3">{{ old('phone_features', $phone->phone_features) }}</textarea>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ old('description', $phone->description) }}</textarea>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Phone</button>
                </div>
            </form>
        </div>
    </div>
@endsection

