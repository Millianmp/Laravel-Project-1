<x-tailwindnav.layout>
    <x-slot:judul>Mata Pelajaran (Subject)</x-slot:judul>

    <div class="container mx-auto mt-10 px-6">
        <div class="overflow-hidden rounded-2xl shadow-lg border border-gray-700 bg-gray-800">
            <table class="min-w-full text-sm text-left text-gray-200">
                <thead class="bg-gray-900 text-xs uppercase tracking-wider text-gray-100">
                    <tr>
                        <th class="px-6 py-4 font-semibold">ID</th>
                        <th class="px-6 py-4 font-semibold">Nama Mapel</th>
                        <th class="px-6 py-4 font-semibold">Kode Mapel</th>
                        <th class="px-6 py-4 font-semibold">Guru Pengampu</th>
                        <th class="px-6 py-4 font-semibold">Deskripsi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach ($subjects as $subject)
                        <tr class="hover:bg-gray-700 transition-all">
                            <td class="px-6 py-4 font-medium">{{ $subject->id }}</td>
                            <td class="px-6 py-4">{{ $subject->nama_mapel }}</td>
                            <td class="px-6 py-4">{{ $subject->kode_mapel }}</td>
                            <td class="px-6 py-4">{{ $subject->teacher ? $subject->teacher->nama : '-' }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $subject->deskripsi }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-tailwindnav.layout>
