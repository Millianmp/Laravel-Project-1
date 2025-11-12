<x-tailwindnav.layout>
    <x-slot:judul>Teacher</x-slot:judul>

    <div class="container mx-auto mt-10 px-6">
        <div class="overflow-hidden rounded-2xl shadow-lg border border-gray-700 bg-gray-800">
            <table class="min-w-full text-sm text-left text-gray-200">
                <thead class="bg-gray-900 text-xs uppercase tracking-wider text-gray-100">
                    <tr>
                        <th class="px-6 py-3 font-semibold">No</th>
                        <th class="px-6 py-3 font-semibold">Nama</th>
                        <th class="px-6 py-3 font-semibold">Subject</th>
                        <th class="px-6 py-3 font-semibold">Telepon</th>
                        <th class="px-6 py-3 font-semibold">Email</th>
                        <th class="px-6 py-3 font-semibold">Alamat</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach ($teachers as $teacher)
                        <tr class="hover:bg-gray-700 transition-all">
                            <td class="px-6 py-4 font-medium">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4">{{ $teacher->nama }}</td>
                            <td class="px-6 py-4">{{ $teacher->subject ? $teacher->subject->nama_mapel : '-' }}</td>
                            <td class="px-6 py-4">{{ $teacher->telepon }}</td>
                            <td class="px-6 py-4">{{ $teacher->email }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $teacher->alamat }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-tailwindnav.layout>
