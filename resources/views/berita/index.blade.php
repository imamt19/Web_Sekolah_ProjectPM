<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold">
            Kelola Berita
        </h2>
    </x-slot>

    <div class="max-w-7xl mx-auto py-6">

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('berita.create') }}"
           class="px-4 py-2 bg-blue-600 text-white rounded">
            + Tambah Berita
        </a>

        <table class="w-full mt-4 border border-collapse">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border p-2">Gambar</th>
                    <th class="border p-2">Judul</th>
                    <th class="border p-2">Kategori</th>
                    <th class="border p-2">Status</th>
                    <th class="border p-2">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse($beritas as $berita)
                    <tr>

                        <td class="border p-2 text-center">
                            @if($berita->gambar)
                                <img src="{{ asset('storage/'.$berita->gambar) }}"
                                     width="120"
                                     class="rounded mx-auto">
                            @else
                                Tidak ada gambar
                            @endif
                        </td>

                        <td class="border p-2">
                            {{ $berita->judul }}
                        </td>

                        <td class="border p-2">
                            {{ ucfirst($berita->kategori) }}
                        </td>

                        <td class="border p-2">
                            {{ $berita->is_published ? 'Publish' : 'Draft' }}
                        </td>

                        <td class="border p-2">

                            <a href="{{ route('berita.edit', $berita) }}"
                               class="text-blue-600 font-bold">
                                Edit
                            </a>

                            |

                            <form action="{{ route('berita.destroy', $berita) }}"
                                  method="POST"
                                  style="display:inline">

                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    onclick="return confirm('Yakin hapus berita ini?')"
                                    class="text-red-600 font-bold">
                                    Hapus
                                </button>

                            </form>

                        </td>

                    </tr>
                @empty

                    <tr>
                        <td colspan="5" class="text-center p-5">
                            Belum ada berita.
                        </td>
                    </tr>

                @endforelse
            </tbody>
        </table>

    </div>
</x-app-layout>
