<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">
            Tambah Berita
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6">

        <form method="POST" action="{{ route('berita.store') }}" enctype="multipart/form-data">
            @csrf

            <div class="mb-4">
                <label class="block mb-2">Judul</label>
                <input
                    type="text"
                    name="judul"
                    class="w-full border rounded p-2"
                    required>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Ringkasan</label>
                <textarea
                    name="ringkasan"
                    rows="3"
                    class="w-full border rounded p-2"></textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Kategori</label>

                <select name="kategori" class="w-full border rounded p-2" required>
                    <option value="berita">📰 Berita</option>
                    <option value="pengumuman">📢 Pengumuman</option>
                    <option value="agenda">📅 Agenda</option>
                    <option value="prestasi">🏆 Prestasi</option>
                </select>
            </div>

            <div class="mb-4">
                <label>Gambar Berita</label>
                <input type="file" name="gambar" class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label class="block mb-2">Isi Berita</label>
                <textarea
                    name="isi"
                    rows="10"
                    class="w-full border rounded p-2"
                    required></textarea>
            </div>

            <button
                type="submit"
                class="px-4 py-2 bg-blue-600 text-white rounded">
                Simpan Berita
            </button>
        </form>

    </div>
</x-app-layout>
