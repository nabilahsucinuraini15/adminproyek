<?php

namespace App\Http\Controllers;

use App\Models\Pembelian;
use App\Models\Mandor;
use App\Models\Vendor;
use Illuminate\Http\Request;

class PembelianController extends Controller
{
    // Display a listing of the pembelian (purchases).
    public function index()
    {
        $pembelian = Pembelian::with('mandor', 'vendor')->get(); // Retrieve all pembelian with related mandor and vendor data
        return view('pembelian.index', compact('pembelian')); // Pass data to the view
    }

    // Show the form for creating a new pembelian.
    public function create()
    {
        $vendors = Vendor::all(); // Get all vendors for the dropdown
        $mandors = Mandor::all(); // Get all mandors for the dropdown
        return view('pembelian.create', compact('vendors', 'mandors')); // Return create form view with vendors and mandors
    }

    // Store a newly created pembelian in storage.
    public function store(Request $request)
    {
        $request->validate([
            'tanggal_pembelian' => 'required|date',
            'nama_barang' => 'required|string|max:255',
            'vendor_id' => 'required|exists:vendor,id',
            'mandor_id' => 'required|exists:mandor,id',
            'jumlah' => 'required|numeric',
            'harga' => 'required|string', // Validate as a string for currency
            'nota' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048', // Validate image upload
        ]);

        $pembelian = new Pembelian();
        $pembelian->tanggal_pembelian = $request->tanggal_pembelian;
        $pembelian->nama_barang = $request->nama_barang;
        $pembelian->vendor_id = $request->vendor_id;
        $pembelian->mandor_id = $request->mandor_id;
        $pembelian->jumlah = $request->jumlah;
        $pembelian->harga = str_replace(',', '', $request->harga); // Remove commas and store as plain number

        // Handle file upload for nota
        if ($request->hasFile('nota')) {
            $file = $request->file('nota');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('uploads/nota'), $filename);
            $pembelian->nota = $filename;
        }

        $pembelian->save();

        return redirect()->route('pembelian.index'); // Redirect to index after saving
    }

    // Show the form for editing the specified pembelian.
    public function edit($id)
    {
        $pembelian = Pembelian::findOrFail($id); // Find the pembelian by ID
        $vendors = Vendor::all(); // Get all vendors for the dropdown
        $mandors = Mandor::all(); // Get all mandors for the dropdown
        return view('pembelian.edit', compact('pembelian', 'vendors', 'mandors')); // Return edit form view with pembelian data
    }

    // Update the specified pembelian in storage.
    public function update(Request $request, $id)
    {
        // Validasi input
        $validated = $request->validate([
            'tanggal_pembelian' => 'required|date',
            'nama_barang' => 'required|string|max:255',
            'vendor_id' => 'required|exists:vendor,id',
            'mandor_id' => 'required|exists:mandor,id',
            'jumlah' => 'required|numeric',
            'harga' => 'required|numeric',
            'nota' => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // Validasi file nota (optional)
        ]);

        // Cari data pembelian yang akan diupdate
        $pembelian = Pembelian::findOrFail($id);

        // Update data pembelian
        $pembelian->tanggal_pembelian = $validated['tanggal_pembelian'];
        $pembelian->nama_barang = $validated['nama_barang'];
        $pembelian->vendor_id = $validated['vendor_id'];
        $pembelian->mandor_id = $validated['mandor_id'];
        $pembelian->jumlah = $validated['jumlah'];
        $pembelian->harga = str_replace(',', '', $validated['harga']); // Menghapus koma pada harga

        // Proses upload nota jika ada
        if ($request->hasFile('nota')) {
            // Hapus file nota lama jika ada
            if ($pembelian->nota && file_exists(public_path('uploads/nota/' . $pembelian->nota))) {
                unlink(public_path('uploads/nota/' . $pembelian->nota));
            }

            // Simpan file nota baru
            $nota = $request->file('nota');
            $notaFileName = time() . '.' . $nota->getClientOriginalExtension();
            $nota->move(public_path('uploads/nota'), $notaFileName);
            $pembelian->nota = $notaFileName;
        }

        // Simpan perubahan pembelian
        $pembelian->save();

        // Redirect ke index dengan pesan sukses
        return redirect()->route('pembelian.index')->with('success', 'Pembelian berhasil diperbarui!');
    }


    // Remove the specified pembelian from storage.
    public function destroy($id)
    {
        // Find the pembelian and delete it
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->delete();

        // Redirect with a success message
        return redirect()->route('pembelian.index')->with('success', 'Pembelian deleted successfully!');
    }
}
