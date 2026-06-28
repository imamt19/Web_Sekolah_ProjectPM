<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Berita;

class InformasiController extends Controller
{
    public function index(Request $request)
    {
        $query = Berita::where('is_published', true);

        // Filter kategori
        if ($request->filled('kategori')) {
            $query->where('kategori', $request->kategori);
        }

        $beritas = $query->latest()->paginate(9);

        $pengumuman = Berita::where('is_published', true)
            ->where('kategori', 'Pengumuman')
            ->latest()
            ->take(3)
            ->get();

        $agenda = Berita::where('is_published', true)
            ->where('kategori', 'Agenda')
            ->latest()
            ->take(3)
            ->get();

        return view('informasi.index', compact(
            'beritas',
            'pengumuman',
            'agenda'
        ));
    }
}