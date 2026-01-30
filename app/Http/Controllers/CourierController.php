<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function index()
    {
        return view('admin.courier.index', [
            'couriers' => Courier::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('admin.courier.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'address' => 'required|string',
        ]);

        Courier::newCourier($request);
        return redirect()->route('couriers.index')->with('success', 'Courier created successfully.');
    }

    public function edit($id)
    {
        return view('admin.courier.edit', [
            'courier' => Courier::find($id),
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'address' => 'required|string',
        ]);

        Courier::updateCourier($request, $id);
        return redirect()->route('couriers.index')->with('success', 'Courier updated successfully.');
    }

    public function destroy($id)
    {
        Courier::deleteCourier($id);
        return back()->with('success', 'Courier deleted successfully.');
    }
}
