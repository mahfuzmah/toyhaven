@extends('admin.master')

@section('body')
    <div class="container">
        <h3 class="my-3">Manage Couriers</h3>

        <a href="{{ route('couriers.create') }}" class="btn btn-primary mb-3">+ Add New Courier</a>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>SL</th>
                <th>Logo</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Tracking URL</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($couriers as $key => $courier)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>
                        @if($courier->logo)
                            <img src="{{ asset($courier->logo) }}" width="60">
                        @else
                            <span class="text-muted">No Logo</span>
                        @endif
                    </td>
                    <td>{{ $courier->name }}</td>
                    <td>{{ $courier->email }}</td>
                    <td>{{ $courier->mobile }}</td>
                    <td>
                        @if($courier->tracking_url)
                            <a href="{{ $courier->tracking_url }}" target="_blank">Track</a>
                        @else
                            <span class="text-muted">N/A</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('couriers.edit', $courier->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('couriers.destroy', $courier->id) }}" method="POST" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Delete this courier?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
