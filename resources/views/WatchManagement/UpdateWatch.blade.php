@extends('Layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Update Watch</h1>
        <a href="{{ route('watches.index') }}" class="btn btn-secondary">Back to Dashboard</a>
    </div>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('watches.update', $watch->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Brand</label>
                        <input type="text" name="brand" class="form-control"
                               value="{{ old('brand', $watch->brand) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Model</label>
                        <input type="text" name="model" class="form-control"
                               value="{{ old('model', $watch->model) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Strap Material</label>
                        <input type="text" name="strap_material" class="form-control"
                               value="{{ old('strap_material', $watch->strap_material) }}">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Water Resistance</label>
                        <input type="text" name="water_resistance" class="form-control"
                               value="{{ old('water_resistance', $watch->water_resistance) }}">
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Price</label>
                        <input type="number" step="0.01" name="price" class="form-control"
                               value="{{ old('price', $watch->price) }}" required>
                    </div>
                    <div class="col-md-4">
                        <label class="form-label">Color</label>
                        <input type="text" name="color" class="form-control"
                               value="{{ old('color', $watch->color) }}">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Description</label>
                        <textarea name="description" class="form-control" rows="3">{{ old('description', $watch->description) }}</textarea>
                    </div>
                </div>

                <div class="mt-4">
                    <button type="submit" class="btn btn-primary">Update Watch</button>
                </div>
            </form>
        </div>
    </div>
@endsection

