<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Phone;

class PhoneControler extends Controller
{
    public function index()
    {
        $phones = Phone::all();
        return view('PhoneManagement.Dashboard', compact('phones'));
    }

    public function show($id)
    {
        $phone = Phone::findOrFail($id);
        return view('PhoneManagement.ShowPhone', compact('phone'));
    }

    public function create()
    {
        return view('PhoneManagement.AddNewPhone');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'phone_brand' => 'required|string|max:255',
            'phone_model' => 'required|string|max:255',
            'phone_storage' => 'required|string|max:255',
            'phone_ram' => 'required|string|max:255',
            'phone_price' => 'required|numeric',
            'phone_color' => 'required|string|max:255',
            'phone_weight' => 'nullable|numeric',
            'phone_dimensions' => 'nullable|string|max:255',
            'phone_features' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        Phone::create($data);

        return redirect('/phones')->with('success', 'Phone created successfully.');
    }

    public function edit($id)
    {
        $phone = Phone::findOrFail($id);
        return view('PhoneManagement.UpdatePhone', compact('phone'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'phone_brand' => 'required|string|max:255',
            'phone_model' => 'required|string|max:255',
            'phone_storage' => 'required|string|max:255',
            'phone_ram' => 'required|string|max:255',
            'phone_price' => 'required|numeric',
            'phone_color' => 'required|string|max:255',
            'phone_weight' => 'nullable|numeric',
            'phone_dimensions' => 'nullable|string|max:255',
            'phone_features' => 'nullable|string',
            'description' => 'nullable|string',
        ]);

        $phone = Phone::findOrFail($id);
        $phone->update($data);

        return redirect('/phones')->with('success', 'Phone updated successfully.');
    }

    public function destroy($id)
    {
        $phone = Phone::findOrFail($id);
        $phone->delete();

        return redirect('/phones')->with('success', 'Phone deleted successfully.');
    }
}
