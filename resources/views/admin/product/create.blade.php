@extends('admin.master')

@section('body')

    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
            </ol>
        </div>
    </div>


    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Add Product Form</h3>
            </div>
            <div class="card-body">
                <p class="text-muted">{{session('message')}}</p>
                <form class="form-horizontal" action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-4">
                        <label for="firstName" class="col-md-3 form-label">Category Name</label>
                        <div class="col-md-9">
                            <select name="category_id" class="form-control" onchange="getSubCategoryByCategory(this.value)">
                                <option value="">--Select Category Name--</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="subCategoryId" class="col-md-3 form-label">Sub-Category Name</label>
                        <div class="col-md-9">
                            <select name="sub_category_id" class="form-control" id="subCategoryId">
                                <option value="">--Select Sub-Category Name--</option>
                                @foreach($sub_categories as $sub_category)
                                    <option value="{{ $sub_category->id }}">{{ $sub_category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="brandId" class="col-md-3 form-label">Brand Name</label>
                        <div class="col-md-9">
                            <select name="brand_id" class="form-control" id="brandId">
                                <option value="">--Select Brand Name--</option>
                                @foreach($brands as $brand)
                                    <option value="{{ $brand->id }}">{{ $brand->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="unitId" class="col-md-3 form-label">Unit Name</label>
                        <div class="col-md-9">
                            <select name="unit_id" class="form-control" id="unitId">
                                <option value="">--Select Unit Name--</option>
                                @foreach($units as $unit)
                                    <option value="{{ $unit->id }}">{{ $unit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="age" class="col-md-3 form-label">Select Age</label>
                        <div class="col-md-9">
                            <select name="age" class="form-control" id="age">
                                <option value="">--Select Age--</option>
                                <option value="1">0-12 Months</option>
                                <option value="2">1-3 Years</option>
                                <option value="3">3-6 Years</option>
                                <option value="4">6-12 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="material" class="col-md-3 form-label">Select Material</label>
                        <div class="col-md-9">
                            <select name="material" class="form-control" id="material">
                                <option value="">--Select Material--</option>
                                <option value="1">Plastic</option>
                                <option value="2">Wooden</option>
                                <option value="3">Cushion</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="name" class="col-md-3 form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" id="name" value="{{old('name')}}" placeholder="Enter Product Name" type="text" name="name">
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="code" class="col-md-3 form-label">Code</label>
                        <div class="col-md-9">
                            <input class="form-control" id="code" value="{{old('code')}}" placeholder="Enter Product Code" type="text" name="code">
                            <span class="text-danger">{{$errors->has('code') ? $errors->first('code') : ''}}</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="stockAmount" class="col-md-3 form-label">Stock Amount</label>
                        <div class="col-md-9">
                            <input class="form-control" id="stockAmount" value="{{old('stock_amount')}}" placeholder="Enter Product Stock Amount" type="number" name="stock_amount">
                            <span class="text-danger">{{$errors->has('stock_amount') ? $errors->first('stock_amount') : ''}}</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="shortDescription" class="col-md-3 form-label">Short Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="shortDescription" placeholder="Enter Short Description" name="short_description">{{old('short_description')}}</textarea>
                            <span class="text-danger">{{$errors->has('short_description') ? $errors->first('short_description') : ''}}</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="longDescription" class="col-md-3 form-label">Long Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="longDescription" placeholder="Enter Product Long Description" name="long_description">{{ old('long_description') }}</textarea>
                            <span class="text-danger">{{$errors->has('long_description') ? $errors->first('long_description') : ''}}</span>
                        </div>
                    </div>

{{--                    <div class="row mb-4">--}}
{{--                        <label for="shortDescription" class="col-md-3 form-label">Short Description</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <input class="form-control" id="shortDescription" value="{{old('short_description')}}" placeholder="Enter Short Amount" type="text" name="short_description">--}}
{{--                            <span class="text-danger">{{$errors->has('short_description') ? $errors->first('short_description') : ''}}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

{{--                    <div class="row mb-4">--}}
{{--                        <label for="summernote" class="col-md-3 form-label">Long Description</label>--}}
{{--                        <div class="col-md-9">--}}
{{--                            <textarea class="form-control" id="summernote" placeholder="Enter Product Long Description" name="long_description">{{ old('long_description') }}</textarea>--}}
{{--                            <span class="text-danger">{{$errors->has('long_description') ? $errors->first('long_description') : ''}}</span>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="row mb-4">
                        <label for="image" class="col-md-3 form-label">Product Image</label>
                        <div class="col-md-9">
                            <input class="form-control" id="image" name="image" type="file">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="otherImage" class="col-md-3 form-label">Other Image</label>
                        <div class="col-md-9">
                            <input class="form-control" id="otherImage" name="other_image[]" type="file" multiple>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label class="col-md-3 form-label">Product Price</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="number" class="form-control"  value="{{old('regular_price')}}" placeholder="Product Regular Price" name="regular_price">
                                <input type="number" class="form-control" value="{{old('selling_price')}}"  placeholder="Product Selling Price" name="selling_price">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="metaTitle" class="col-md-3 form-label">Meta Title</label>
                        <div class="col-md-9">
                            <input class="form-control" id="metaTitle" value="{{old('meta_title')}}" placeholder="Enter Meta Title" type="text" name="meta_title">
                            <span class="text-danger">{{$errors->has('meta_title') ? $errors->first('meta_title') : ''}}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="metaDescription" class="col-md-3 form-label">Meta Description</label>
                        <div class="col-md-9">
                            <input class="form-control" id="metaDescription" value="{{old('meta_description')}}" placeholder="Enter Meta Description" type="text" name="meta_description">
                            <span class="text-danger">{{$errors->has('meta_description') ? $errors->first('meta_description') : ''}}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label">Publication Status</label>
                        <div class="col-md-9 pt-2">
                            <label><input   name="status" type="radio" value="1" checked/>Published</label>
                            <label><input   name="status" type="radio" value="0"/>Unpublished</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Create New Product</button>
                </form>
            </div>
        </div>
    </div>

@endsection
