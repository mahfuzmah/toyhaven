<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public  function index()
    {
        return view('admin.unit.index', [
            'units' => Unit::all()]);
    }
    public  function create()
    {
        return view('admin.unit.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:units,name'
        ]);
        Unit::newUnit($request);
        return back()->with('message', 'Unit info create successfully');
    }
    public function edit($id)
    {
        return view('admin.unit.edit', [
            'unit'=> Unit::find($id)
        ]);
    }
    public function update(Request $request)
    {
        Unit::UpdateUnit($request);
        return redirect('/unit/index')->with('message', 'Unit info update successfully');
    }
    public function delete($id)
    {
        Unit::deleteUnit($id);
        return back()->with('message', 'Unit info delete successfully.');
    }
}
