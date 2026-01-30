<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandContrller extends Controller
{
    public  function create()
    {
        return view('admin.brand.create');
    }
    public  function index()
    {
        return view('admin.brand.index', [
            'brands' => Brand::all()
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required|unique:brands,name'
        ]);
        Brand::newBrand($request);
        return back()->with('message', 'Brand info create successfully');
    }
    public function edit($id)
    {
        return view('admin.brand.edit', [
            'brand'=> Brand::find($id)
        ]);
    }
    public function update(Request $request)
    {
        Brand::UpdateBrand($request);
        return redirect('/brand/index')->with('message', 'Brand info update successfully');
    }
    public function delete($id)
    {
       Brand::deleteBrand($id);
       return back()->with('message', 'Brand info delete successfully.');
    }
}
