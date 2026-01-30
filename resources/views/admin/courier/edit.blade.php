@extends('admin.master')

@section('body')
    <div class="container">
        <h3 class="my-3">Edit Courier</h3>

        <form action="{{ route('couriers.update', $courier->id) }}" method="POST" enctype="multipart/form-data">
            @csrf @method('PUT')
            @include('admin.courier.form', ['courier' => $courier])
            <button type="submit" class="btn btn-primary">Update Courier</button>
        </form>
    </div>
@endsection
