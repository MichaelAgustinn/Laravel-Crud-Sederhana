<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lihat</title>
</head>

<body>
    <h1>Daftar Anggota</h1>
    @if (session('success'))
        <div style="color: green">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ url('/tambah') }}">Tambah Data</a>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>NISN</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>NO TELEPON</th>
            <th>ACTION</th>
        </tr>
        @foreach ($data as $d)
            <tr>
                <td>{{ $d->nisn }}</td>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->alamat }}</td>
                <td>{{ $d->no_telepon }}</td>
                <td>
                    <a href="/edit/{{ $d->nisn }}">edit</a>
                    |
                    <a href="/delete/{{ $d->nisn }}">delete</a>
                </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
