@extends('Layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Watches Dashboard</h1>
        <a href="{{ route('watches.create') }}" class="btn btn-primary">Add New Watch</a>
    </div>

    @if ($watches->isEmpty())
        <div class="alert alert-info">
            No watches found. Click "Add New Watch" to create one.
        </div>
    @else
        <div class="card">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-striped mb-0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Brand</th>
                                <th>Model</th>
                                <th>Strap</th>
                                <th>Water Resistance</th>
                                <th>Price</th>
                                <th>Color</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($watches as $watch)
                                <tr>
                                    <td>{{ $watch->id }}</td>
                                    <td>{{ $watch->brand }}</td>
                                    <td>{{ $watch->model }}</td>
                                    <td>{{ $watch->strap_material }}</td>
                                    <td>{{ $watch->water_resistance }}</td>
                                    <td>${{ number_format($watch->price, 2) }}</td>
                                    <td>{{ $watch->color }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('watches.edit', $watch->id) }}" class="btn btn-sm btn-outline-secondary">
                                            Edit
                                        </a>
                                        <form action="{{ route('watches.destroy', $watch->id) }}" method="POST" class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this watch?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection

