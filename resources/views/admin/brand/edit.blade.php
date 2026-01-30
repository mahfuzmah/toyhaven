@extends('admin.master')

@section('body')

    <div class="page-header">
        <div>
            <h1 class="page-title">Brand Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Brand</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Brand</li>
            </ol>
        </div>
    </div>


    <div class="col-lg-9 col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Add Brand Form</h3>
            </div>
            <div class="card-body">
                <p class="text-muted">{{session('message')}}</p>
                <form class="form-horizontal" action="{{route('brand.update', $brand->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="firstName" class="col-md-3 form-label">Brand Name</label>
                        <div class="col-md-9">
                            <input class="form-control" id="firstName" value="{{ $brand->name }}" placeholder="Enter your firstname" type="text" name="name">
                            <input type="hidden" value="{{$brand->id}}" name="id">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="lastName" class="col-md-3 form-label">Brand Description</label>
                        <div class="col-md-9">
                            <textarea name="description" class="form-control" placeholder="Enter Category Description">{{ $brand->description }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label">Brand Image</label>
                        <div class="col-md-9">
                            <input class="form-control" id="email" name="image" type="file">
                            <img src="{{asset($brand->image)}}" alt="" height="50">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label">Publication Status</label>
                        <div class="col-md-9 pt-2">
                            <label><input name="status" type="radio" value="1" {{ $brand->status == 1 ? 'checked' : '' }}/>Published</label>
                            <label><input name="status" type="radio" value="0" {{ $brand->status == 0 ? 'checked' : '' }}/>Unpublished</label>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Create New Brand</button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- /row -->

@endsection
