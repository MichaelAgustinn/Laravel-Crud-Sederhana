<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>
    <h1>Tambah Anggota</h1>
    <form method="POST">
        @csrf
        <table>
            <tr>
                <td>NISN Anggota</td>
                <td><input type="number" name="nisn"></td>
            </tr>
            <tr>
                <td>Nama Anggota</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td><input type="number" name="no_telepon"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">Simpan</button>
                    <a href="/">Kembali</a>
                </td>
            </tr>
        </table>
</body>

</html>
