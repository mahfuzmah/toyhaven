@extends('admin.master')

@section('body')

    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
            </ol>
        </div>
    </div>


    <div class="col-md-12">
        <div class="card">
            <div class="card-header border-bottom">
                <h3 class="card-title">Edit Product Form</h3>
            </div>
            <div class="card-body">
                <p class="text-muted">{{session('message')}}</p>
                <form class="form-horizontal" action="{{route('product.update', $product->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-4">
                        <label for="firstName" class="col-md-3 form-label">Category Name</label>
                        <div class="col-md-9">
                            <select name="category_id" class="form-control" onchange="getSubCategoryByCategory(this.value)">
                                <option value="">--Select Category Name--</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" @selected($category->id == $product->category->id)>{{ $category->name }}</option>
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
                                    <option value="{{ $sub_category->id }}"@selected($sub_category->id == $product->sub_category_id)>{{ $sub_category->name }}</option>
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
                                    <option value="{{ $brand->id }}" @selected($brand->id == $product->brand_id)>{{ $brand->name }}</option>
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
                                    <option value="{{ $unit->id }}" @selected($unit->id == $product->unit_id)>{{ $unit->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="age" class="col-md-3 form-label">Select Age</label>
                        <div class="col-md-9">
                            <select name="age" class="form-control" id="age">
                                <option value="">--Select Age--</option>
                                <option value="1" @selected($product->age == 1)>0-12 Months</option>
                                <option value="2" @selected($product->age == 2)>1-3 Years</option>
                                <option value="3" @selected($product->age == 3)>3-6 Years</option>
                                <option value="4" @selected($product->age == 4)>6-12 Years</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="material" class="col-md-3 form-label">Select Material</label>
                        <div class="col-md-9">
                            <select name="material" class="form-control" id="material">
                                <option value="">--Select Material--</option>
                                <option value="1" @selected($product->material == 1)>Plastic</option>
                                <option value="2" @selected($product->material == 2)>Wooden</option>
                                <option value="3" @selected($product->material == 3)>Cushion</option>
                            </select>
                        </div>
                    </div>


                    <div class="row mb-4">
                        <label for="name" class="col-md-3 form-label">Name</label>
                        <div class="col-md-9">
                            <input class="form-control" id="name" value="{{$product->name}}" placeholder="Enter Product Name" type="text" name="name">
                            <span class="text-danger">{{$errors->has('name') ? $errors->first('name') : ''}}</span>
                        </div>
                    </div>



                    <div class="row mb-4">
                        <label for="code" class="col-md-3 form-label">Code</label>
                        <div class="col-md-9">
                            <input class="form-control" id="code" value="{{$product->code}}" placeholder="Enter Product Code" type="text" name="code">
                            <span class="text-danger">{{$errors->has('code') ? $errors->first('code') : ''}}</span>
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="stockAmount" class="col-md-3 form-label">Stock Amount</label>
                        <div class="col-md-9">
                            <input class="form-control" id="stockAmount" value="{{$product->stock_amount}}" placeholder="Enter Product Stock Amount" type="number" name="stock_amount">
                            <span class="text-danger">{{$errors->has('stock_amount') ? $errors->first('stock_amount') : ''}}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="shortDescription" class="col-md-3 form-label">Short Description</label>
                        <div class="col-md-9">
                            <input class="form-control" id="shortDescription" value="{{$product->short_description}}" placeholder="Enter Short Amount" type="text" name="short_description">
                            <span class="text-danger">{{$errors->has('short_description') ? $errors->first('short_description') : ''}}</span>
                        </div>
                    </div>



                    <div class="row mb-4">
                        <label for="summernote" class="col-md-3 form-label">Long Description</label>
                        <div class="col-md-9">
                            <textarea class="form-control" id="summernote" placeholder="Enter Product Long Description" name="long_description">{{ $product->long_description }}</textarea>
                            <span class="text-danger">{{$errors->has('long_description') ? $errors->first('long_description') : ''}}</span>
                        </div>
                    </div>




                    <div class="row mb-4">
                        <label for="image" class="col-md-3 form-label">Product Image</label>
                        <div class="col-md-9">
                            <input class="form-control" id="image" name="image" type="file">
                            <img src="{{asset($product->image)}}" alt="" height="100" width="100">
                        </div>
                    </div>

                    <div class="row mb-4">
                        <label for="otherImage" class="col-md-3 form-label">Other Image</label>
                        <div class="col-md-9">
                            <input class="form-control" id="otherImage" name="other_image[]" type="file" multiple>
                            @foreach($product->otherImage as $otherImage )
                                <img src="{{asset($otherImage->image)}}" alt="" height="100" width="100">
                            @endforeach
                        </div>
                    </div>



                    <div class="row mb-4">
                        <label class="col-md-3 form-label">Product Price</label>
                        <div class="col-md-9">
                            <div class="input-group">
                                <input type="number" class="form-control" placeholder="Product Regular Price" value="{{$product->regular_price}}" name="regular_price">
                                <input type="number" class="form-control" placeholder="Product Selling Price" value="{{$product->selling_price}}" name="selling_price">
                            </div>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="metaTitle" class="col-md-3 form-label">Meta Title</label>
                        <div class="col-md-9">
                            <input class="form-control" id="metaTitle" value="{{$product->meta_title}}" placeholder="Enter Meta Title" type="text" name="meta_title">
                            <span class="text-danger">{{$errors->has('meta_title') ? $errors->first('meta_title') : ''}}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label for="metaDescription" class="col-md-3 form-label">Meta Description</label>
                        <div class="col-md-9">
                            <input class="form-control" id="metaDescription" value="{{$product->meta_description}}" placeholder="Enter Meta Description" type="text" name="meta_description">
                            <span class="text-danger">{{$errors->has('meta_description') ? $errors->first('meta_description') : ''}}</span>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <label class="col-md-3 form-label">Publication Status</label>
                        <div class="col-md-9 pt-2">
                            <label><input   name="status" type="radio" value="1" {{$product->status == 1 ?  'checked' : ''}}>Published</label>
                            <label><input   name="status" type="radio" value="0" {{$product->status == 0 ?  'unchecked' :''}}>Unpublished</label>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Update New Product</button>
                </form>
            </div>
        </div>
    </div>

@endsection
