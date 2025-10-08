<x-layout>
    <x-slot:judul>Student</x-slot:judul>
    <div class="container">
<table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Tanggal Lahir</th>
                <th>Absen</th>
                <th>Email</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $student->name}}</td>
                <td>{{ $student->classroom->name }}</td>
                <td>{{ $student->birthday }}</td>
                <td>{{ $student->absence }}</td>
                <td>{{ $student->email }}</td>
                <td>{{ $student->address }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</x-layout>
