<x-tailwindnav.layout>
    <x-slot:judul>Daftar Orang Tua / Wali</x-slot:judul>

    <div class="container mx-auto px-6 py-10">
        <div class="bg-gray-900 shadow-2xl rounded-3xl overflow-hidden border border-gray-800">
            <div class="px-6 py-5 border-b border-gray-800">
                <h1 class="text-2xl font-bold text-white">Daftar Orang Tua / Wali</h1>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-800 text-gray-100 text-sm uppercase tracking-wider">
                            <th class="px-6 py-4 text-left font-semibold">No</th>
                            <th class="px-6 py-4 text-left font-semibold">Nama</th>
                            <th class="px-6 py-4 text-left font-semibold">Pekerjaan</th>
                            <th class="px-6 py-4 text-left font-semibold">No HP</th>
                            <th class="px-6 py-4 text-left font-semibold">Email</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        @foreach($guardians as $guardian)
                        <tr class="hover:bg-gray-800/70 transition duration-150 ease-in-out">
                            <td class="px-6 py-4 text-gray-400">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 font-medium text-gray-100">{{ $guardian->name }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $guardian->job }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $guardian->number ?? '-' }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $guardian->email }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="px-6 py-4 bg-gray-900 border-t border-gray-800 text-gray-400 text-sm text-right">
                Total Wali: {{ $guardians->count() }}
            </div>
        </div>
    </div>
</x-tailwindnav.layout>
