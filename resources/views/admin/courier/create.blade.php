

@extends('admin.master')

@section('body')

    <div class="page-header">
        <div>
            <h1 class="page-title">Courier Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Courier</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Courier</li>
            </ol>
        </div>
    </div>


    <div class="col-lg-9 col-md-12 mx-auto">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Add Courier Form</h3>
            </div>
            <div class="card-body">
                <p class="text-muted">{{session('message')}}</p>
                <form action="{{ route('couriers.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-4">
                        <label for="name" class="col-md-3 form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" id="name" value="{{old('name')}}" placeholder="Enter Courier Name" type="text" name="name" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="email" class="col-md-3 form-label">Email</label>
                        <div class="col-md-9">
                            <input class="form-control" id="email" value="{{old('email')}}" placeholder="Enter Email" type="email" name="email" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="mobile" class="col-md-3 form-label">Mobile</label>
                        <div class="col-md-9">
                            <input class="form-control" id="mobile" value="{{old('mobile')}}" placeholder="Enter Mobile  Number" type="number" name="mobile" required>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="address" class="col-md-3 form-label">Address</label>
                        <div class="col-md-9">
                            <input class="form-control" id="address" value="{{old('address')}}" placeholder="Enter Address" type="text" name="address" >
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="tracking_url" class="col-md-3 form-label">Rracking URL</label>
                        <div class="col-md-9">
                            <input class="form-control" id="tracking_url" value="{{old('tracking_url')}}" placeholder="Enter URL" type="text" name="tracking_url" >
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="logo" class="col-md-3 form-label">Logo</label>
                        <div class="col-md-9">
                            <input class="form-control" id="logo" value="{{old('logo')}}" type="file" name="logo" >
                        </div>
                    </div>








                    <button class="btn btn-primary" type="submit">Create Courier Name</button>
                </form>
            </div>
        </div>
    </div>

@endsection
