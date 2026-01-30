@extends('admin.master')

@section('body')

    <div class="page-header">
        <div>
            <h1 class="page-title">Category Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Category</li>
            </ol>
        </div>
    </div>


            <div class="col-lg-9 col-md-12">
                <div class="card">
                    <div class="card-header border-bottom">
                        <h3 class="card-title">Add Category Form</h3>
                    </div>
                    <div class="card-body">
                        <p class="text-muted">{{session('message')}}</p>
                        <form class="form-horizontal" action="{{route('category.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-4">
                                <label for="firstName" class="col-md-3 form-label">Category Name</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="firstName" value="{{old('name')}}" placeholder="Enter your firstname" type="text" name="name">
                                    <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label for="lastName" class="col-md-3 form-label">Category Description</label>
                                <div class="col-md-9">
                                    <textarea name="description" class="form-control" placeholder="Enter Category Description">{{old('description')}}</textarea>
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3 form-label">Category Image</label>
                                <div class="col-md-9">
                                    <input class="form-control" id="email" name="image" type="file">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <label class="col-md-3 form-label">Publication Status</label>
                                <div class="col-md-9 pt-2">
                                    <label><input   name="status" type="radio" value="1" checked/>Published</label>
                                    <label><input   name="status" type="radio" value="0"/>Unpublished</label>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Create New Category</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->

@endsection
