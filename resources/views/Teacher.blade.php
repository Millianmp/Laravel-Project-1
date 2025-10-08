<x-layout>
    <x-slot:judul>Teacher</x-slot:judul>
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Subject</th>
                    <th>Telepon</th>
                    <th>Email</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $teacher->nama }}</td>
                    <td>{{ $teacher->subject ? $teacher->subject->nama_mapel : '' }}</td>
                    <td>{{ $teacher->telepon }}</td>
                    <td>{{ $teacher->email }}</td>
                    <td>{{ $teacher->alamat }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
