<x-layout>
    <x-slot:judul>Mata Pelajaran (Subject)</x-slot:judul>

    <div class="container mt-4">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Mapel</th>
                    <th>Kode Mapel</th>
                    <th>Guru Pengampu</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subjects as $subject)
                    <tr>
                        <td>{{ $subject->id }}</td>
                        <td>{{ $subject->nama_mapel }}</td>
                        <td>{{ $subject->kode_mapel }}</td>
                        <td>{{ $subject->teacher ? $subject->teacher->nama : '-' }}</td>
                        <td>{{ $subject->deskripsi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
