<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Anggota</title>
</head>

<body>
    <h1>Edit Anggota</h1>
    <form method="POST">
        @csrf
        <table>
            <tr>
                <td>NISN</td>
                <td><input type="text" name="name" value="{{ $data->nisn }}"></td>
            </tr>
            <tr>
                <td>Nama ANGGOTA</td>
                <td><input type="text" name="nama" value="{{ $data->nama }}"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="{{ $data->alamat }}"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="number" name="no_telepon" value="{{ $data->no_telepon }}"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Simpan</button>
                    <a href="/lihat">Kembali</a>
                </td>
            </tr>
        </table>
    </form>
</body>

</html>
