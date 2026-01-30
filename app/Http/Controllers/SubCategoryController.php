<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    public $categories, $subCategory;

    public  function create()
    {
        $this->categories = Category::all();
        return view('admin.sub-category.create',
            ['categories'=>$this->categories
            ]);
    }
    public  function index()
    {
        return view('admin.sub-category.index', [
            'sub_categories' => SubCategory::all()]);
    }
    public function store(Request $request)
    {
        SubCategory::newSubCategory($request);
        return back()->with('message', ' sub-category info create successfully');
    }
    public function edit($id)
    {
        $this->categories  = Category::all();
        $this->subCategory = SubCategory::find($id);

        return view('admin.sub-category.edit', [
            'categories' => $this->categories,
            'sub_category'=>$this->subCategory
        ]);
    }
    public function update(Request $request)
    {
        SubCategory::UpdateSubCategory($request);
        return redirect('/sub-category/index')->with('message', 'sub-category update successuflly');
    }
    public function delete($id)
    {
        SubCategory::deleteSubCategory($id);
        return redirect('/sub-category/index')->with('message', 'sub-category delete successuflly');
    }
}
