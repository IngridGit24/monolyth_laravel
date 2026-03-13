@extends('Layout')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h1 class="h3">Phones Dashboard</h1>
        <a href="{{ route('phones.create') }}" class="btn btn-primary">Add New Phone</a>
    </div>

    @if ($phones->isEmpty())
        <div class="alert alert-info">
            No phones found. Click "Add New Phone" to create one.
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
                                <th>Storage</th>
                                <th>RAM</th>
                                <th>Price</th>
                                <th>Color</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($phones as $phone)
                                <tr>
                                    <td>{{ $phone->id }}</td>
                                    <td>{{ $phone->phone_brand }}</td>
                                    <td>{{ $phone->phone_model }}</td>
                                    <td>{{ $phone->phone_storage }}</td>
                                    <td>{{ $phone->phone_ram }}</td>
                                    <td>${{ number_format($phone->phone_price, 2) }}</td>
                                    <td>{{ $phone->phone_color }}</td>
                                    <td class="text-end">
                                        <a href="{{ route('phones.edit', $phone->id) }}" class="btn btn-sm btn-outline-secondary">
                                            Edit
                                        </a>
                                        <form action="{{ route('phones.destroy', $phone->id) }}" method="POST" class="d-inline"
                                              onsubmit="return confirm('Are you sure you want to delete this phone?');">
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

