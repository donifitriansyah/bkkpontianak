<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Http\Request;

class UserBeritaController extends Controller
{
    public function show($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $berita->increment('views');
        return view('pages.frontend.berita.detail', compact('berita'));
    }

    public function filterByCategory($id)
    {
        $kategori = KategoriBerita::findOrFail($id);

        // Ambil berita berdasarkan kategori
        $beritas = Berita::with('kategori','penulis')
                        ->where('kategori_id', $id)
                        ->where('status', 'published')
                        ->orderBy('tanggal', 'desc')
                        ->paginate(6);

        // Sidebar: Recent Post
        $recentPost = Berita::where('status', 'published')
                            ->orderBy('tanggal', 'desc')
                            ->limit(5)
                            ->get();

        // Sidebar: Semua Kategori
        $kategoriList = KategoriBerita::orderBy('nama_kategori', 'ASC')->get();

        return view('pages.frontend.informasi-publik.berita', compact(
            'beritas', 'kategori', 'kategoriList', 'recentPost'
        ));
    }

}
