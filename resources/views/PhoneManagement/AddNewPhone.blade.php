@extends('Layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Add New Phone</h1>
        <a href="{{ route('phones.index') }}" class="btn btn-secondary">Back to Dashboard</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('phones.store') }}" method="POST">
                @csrf

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Brand</label>
                        <input type="text" name="phone_brand" class="form-control" value="{{ old('phone_brand') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Model</label>
                        <input type="text" name="phone_model" class="form-control" value="{{ old('phone_model') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Storage</label>
                        <input type="text" name="phone_storage" class="form-control" value="{{ old('phone_storage') }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">RAM</label>
                        <input type="text" name="phone_ram" class="form-control" value="{{ old('phone_ram') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Price</label>
                        <input type="number" step="0.01" name="phone_price" class="form-control" value="{{ old('phone_price') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Color</label>
                        <input type="text" name="phone_color" class="form-control" value="{{ old('phone_color') }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Weight (g)</label>
                        <input type="number" step="0.01" name="phone_weight" class="form-control" value="{{ old('phone_weight') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Dimensions</label>
                        <input type="text" name="phone_dimensions" class="form-control" value="{{ old('phone_dimensions') }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Features</label>
                        <textarea name="phone_features" class="form-control" rows="3">{{ old('phone_features') }}</textarea>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Save Phone</button>
                </div>
            </form>
        </div>
    </div>
@endsection

