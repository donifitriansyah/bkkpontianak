<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\StandarPelayanan;
use Illuminate\Http\Request;

class StandarPelayananController extends Controller
{
    public function index()
    {
        $data = StandarPelayanan::all();
        return view('pages.backend.layanan.standar-pelayanan.index', compact('data'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'text' => 'required',
        ]);

        StandarPelayanan::create($request->all());

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'text' => 'required',
        ]);

        $data = StandarPelayanan::findOrFail($id);
        $data->update($request->all());

        return redirect()->back()->with('success', 'Data berhasil diperbarui');
    }

    public function destroy($id)
    {
        StandarPelayanan::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Data berhasil dihapus');
    }

        public function uploadImage(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $path = $request->file('file')->store('summernote', 'public');

        return response()->json([
            'url' => asset('storage/' . $path),
        ]);
    }

        public function show($id)
    {
        $data = StandarPelayanan::findOrFail($id);
        return view('pages.frontend.layanan.standar-pelayanan-show', compact('data'));
    }
}
