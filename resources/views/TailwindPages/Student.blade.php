<x-tailwindnav.layout>
    <x-slot:judul>Student</x-slot:judul>

    <div class="container mx-auto px-6 py-10">
        <div class="bg-gray-900 shadow-2xl rounded-3xl overflow-hidden border border-gray-800">
            <div class="px-6 py-5 border-b border-gray-800">
                <h1 class="text-2xl font-bold text-white">Daftar Siswa</h1>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full border-collapse">
                    <thead>
                        <tr class="bg-gray-800 text-gray-100 text-sm uppercase tracking-wider">
                            <th class="px-6 py-4 text-left font-semibold">ID</th>
                            <th class="px-6 py-4 text-left font-semibold">Nama</th>
                            <th class="px-6 py-4 text-left font-semibold">Kelas</th>
                            <th class="px-6 py-4 text-left font-semibold">Tanggal Lahir</th>
                            <th class="px-6 py-4 text-left font-semibold">Absen</th>
                            <th class="px-6 py-4 text-left font-semibold">Email</th>
                            <th class="px-6 py-4 text-left font-semibold">Alamat</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-800">
                        @foreach ($students as $student)
                        <tr class="hover:bg-gray-800/70 transition duration-150 ease-in-out">
                            <td class="px-6 py-4 text-gray-400">{{ $student->id }}</td>
                            <td class="px-6 py-4 font-medium text-gray-100">{{ $student->name }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $student->classroom->name ?? '-' }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $student->birthday }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $student->absence }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $student->email }}</td>
                            <td class="px-6 py-4 text-gray-300">{{ $student->address }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="px-6 py-4 bg-gray-900 border-t border-gray-800 text-gray-400 text-sm text-right">
                Total Siswa: {{ $students->count() }}
            </div>
        </div>
    </div>
</x-tailwindnav.layout>
