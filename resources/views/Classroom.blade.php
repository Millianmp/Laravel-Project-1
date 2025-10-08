<x-layout>
    <x-slot:judul>Classroom</x-slot:judul>
    <div class="container">
<table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Daftar Siswa</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($classrooms as $classroom)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $classroom ['name']}}</td>
                <td>
                 @foreach ($classroom->student as $student)
                     {{$student->name}}<br>
                 @endforeach
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div>
</x-layout>
