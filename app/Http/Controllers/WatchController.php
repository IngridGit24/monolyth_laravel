<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watch;

class WatchController extends Controller
{
    public function index()
    {
        $watches = Watch::all();
        return view('WatchManagement.Dashboard', compact('watches'));
    }

    public function create()
    {
        return view('WatchManagement.AddNewWatch');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'strap_material' => 'nullable|string|max:255',
            'water_resistance' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'color' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        Watch::create($data);

        return redirect()->route('watches.index')->with('success', 'Watch created successfully.');
    }

    public function edit($id)
    {
        $watch = Watch::findOrFail($id);
        return view('WatchManagement.UpdateWatch', compact('watch'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'strap_material' => 'nullable|string|max:255',
            'water_resistance' => 'nullable|string|max:255',
            'price' => 'required|numeric',
            'color' => 'nullable|string|max:255',
            'description' => 'nullable|string',
        ]);

        $watch = Watch::findOrFail($id);
        $watch->update($data);

        return redirect()->route('watches.index')->with('success', 'Watch updated successfully.');
    }

    public function destroy($id)
    {
        $watch = Watch::findOrFail($id);
        $watch->delete();

        return redirect()->route('watches.index')->with('success', 'Watch deleted successfully.');
    }
}
