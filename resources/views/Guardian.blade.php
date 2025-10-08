<x-layout>
    <x-slot:judul>Daftar Orang Tua / Wali</x-slot:judul>
    <div class="container">
        <table border="1" cellpadding="8" cellspacing="0">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Pekerjaan</th>
                    <th>No HP</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guardians as $guardian)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $guardian->name }}</td>
                    <td>{{ $guardian->job }}</td>
                    <td>{{ $guardian->number ?? '-' }}</td>
                    <td>{{ $guardian->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>
