<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public   $category;

    public  function index()
    {
        $categories = Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }
    public  function create()
    {
        return view('admin.category.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories,name'
        ]);
        Category::newCategory($request);
        return back()->with('message', 'Category info create successfully');
    }

    public function edit($id)
    {
        return view('admin.category.edit', ['category'=> Category::find($id)]);
    }
    public function update(Request $request)
    {
        Category::UpdateCategory($request);
        return redirect('/category/index')->with('message', 'Category info update successfully');
    }
    public function delete($id)
    {
        Category::deleteCategory($id);
        return back()->with('message', 'Category info delete successfully');
    }
}
