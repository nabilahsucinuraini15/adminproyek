<?php

namespace App\Http\Controllers;

use App\Models\Vendor;
use Illuminate\Http\Request;

class VendorController extends Controller
{
    // Tampilkan semua data vendor
    public function index()
    {
        $vendor = Vendor::all(); // Ambil semua data dari tabel vendor
        return view('vendor.index', compact('vendor')); // Tampilkan view dengan data vendor
    }

    // Tampilkan form untuk membuat vendor baru
    public function create()
    {
        return view('vendor.create');
    }
    
    // Simpan vendor baru ke dalam database
    public function store(Request $request)
    {
        // Validasi input
        $request->validate([
            'nama_vendor' => 'required',
            'no_telp' => 'required|max:15|unique:vendor,no_telp',
            'alamat' => 'required',
        ]);

        // Buat vendor baru
        Vendor::create($request->all());
        return redirect()->route('vendor.index')->with('success', 'Vendor created successfully.');
    }

    // Tampilkan form untuk mengedit vendor yang ada
    public function edit($id)
    {
        $vendor = Vendor::findOrFail($id);
        return view('vendor.edit', compact('vendor'));
    }

    // Update vendor di dalam database
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_vendor' => 'required',
            'no_telp' => 'required|max:15|unique:vendor,no_telp,' . $id,
            'alamat' => 'required',
        ]);

        // Temukan vendor dan update
        $vendor = Vendor::findOrFail($id);
        $vendor->update($request->all());
        return redirect()->route('vendor.index')->with('success', 'Vendor updated successfully.');
    }

    // Hapus vendor dari database
    public function destroy($id)
    {
        $vendor = Vendor::findOrFail($id);
        $vendor->delete();
        return redirect()->route('vendor.index')->with('success', 'Vendor deleted successfully.');
    }
}
