<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">
            Edit Berita
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6">

        <form method="POST"
            action="{{ route('berita.update', $berita) }}"
            enctype="multipart/form-data">
        @csrf
        @method('PUT')

            <div class="mb-4">
                <label>Judul</label>
                <input
                    type="text"
                    name="judul"
                    value="{{ $berita->judul }}"
                    class="w-full border rounded p-2">
            </div>

            <div class="mb-4">
                <label>Ringkasan</label>
                <textarea
                    name="ringkasan"
                    rows="3"
                    class="w-full border rounded p-2">{{ $berita->ringkasan }}</textarea>
            </div>

            <div class="mb-4">
                <label class="block mb-2">Kategori</label>

                <select name="kategori" class="w-full border rounded p-2">

                    <option value="berita"
                        {{ $berita->kategori == 'berita' ? 'selected' : '' }}>
                        📰 Berita
                    </option>

                    <option value="pengumuman"
                        {{ $berita->kategori == 'pengumuman' ? 'selected' : '' }}>
                        📢 Pengumuman
                    </option>

                    <option value="agenda"
                        {{ $berita->kategori == 'agenda' ? 'selected' : '' }}>
                        📅 Agenda
                    </option>

                    <option value="prestasi"
                        {{ $berita->kategori == 'prestasi' ? 'selected' : '' }}>
                        🏆 Prestasi
                    </option>

                </select>
            </div>
            
            <div class="mb-4">
                <label>Gambar Baru</label>

                <input type="file"
                    name="gambar"
                    class="w-full border rounded p-2">

                @if($berita->gambar)
                    <img src="{{ asset('storage/'.$berita->gambar) }}"
                        width="200"
                        class="mt-2 rounded">
                @endif
            </div>

            <div class="mb-4">
                <label>Isi Berita</label>
                <textarea
                    name="isi"
                    rows="10"
                    class="w-full border rounded p-2">{{ $berita->isi }}</textarea>
            </div>

            <button
                type="submit"
                class="px-4 py-2 bg-green-600 text-white rounded">
                Update Berita
            </button>

        </form>

    </div>
</x-app-layout>
