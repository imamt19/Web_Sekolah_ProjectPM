<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    // Tampilkan semua berita
    public function index()
    {
        $beritas = Berita::latest()->get();
        return view('berita.index', compact('beritas'));
    }

    // Form tambah berita
    public function create()
    {
        return view('berita.create');
    }

    // Simpan berita baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'ringkasan' => 'nullable|max:500',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'kategori' => 'required|in:berita,pengumuman,agenda,prestasi',
        ]);

        $gambar = null;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('berita', 'public');
        }

        Berita::create([
            'judul' => $validated['judul'],
            'slug' => Str::slug($validated['judul']),
            'ringkasan' => $validated['ringkasan'],
            'isi' => $validated['isi'],
            'gambar' => $gambar,
            'kategori' => $validated['kategori'],
            'is_published' => true,
        ]);

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil ditambahkan.');
    }

    // Detail berita
    public function show(Berita $beritum)
    {
        return view('berita.show', [
            'berita' => $beritum,
        ]);
    }

    // Form edit berita
    public function edit(Berita $beritum)
    {
        return view('berita.edit', [
            'berita' => $beritum,
        ]);
    }

    // Update berita
    public function update(Request $request, Berita $beritum)
    {
        $validated = $request->validate([
            'judul' => 'required|max:255',
            'ringkasan' => 'nullable|max:500',
            'isi' => 'required',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'kategori' => 'required|in:berita,pengumuman,agenda,prestasi',
        ]);

        $gambar = $beritum->gambar;

        if ($request->hasFile('gambar')) {

            // hapus gambar lama
            if ($beritum->gambar && Storage::disk('public')->exists($beritum->gambar)) {
                Storage::disk('public')->delete($beritum->gambar);
            }

            // upload gambar baru
            $gambar = $request->file('gambar')->store('berita', 'public');
        }

        $beritum->update([
            'judul' => $validated['judul'],
            'slug' => Str::slug($validated['judul']),
            'ringkasan' => $validated['ringkasan'],
            'isi' => $validated['isi'],
            'gambar' => $gambar,
            'kategori' => $validated['kategori'],
        ]);

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil diperbarui.');
    }

    // Hapus berita
    public function destroy(Berita $beritum)
    {
        if ($beritum->gambar && Storage::disk('public')->exists($beritum->gambar)) {
            Storage::disk('public')->delete($beritum->gambar);
        }

        $beritum->delete();

        return redirect()
            ->route('berita.index')
            ->with('success', 'Berita berhasil dihapus.');
    }
}