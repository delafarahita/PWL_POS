<!DOCTYPE html>
<html>
    <head>
        <title>Form Tambah Data User</title>
    </head>
    <body>
        <h1>Form Tambah Data User</h1>
        <a href="{{ route('/user') }}">Kembali</a>
        <form method="post" action="{{ route('/user/tambah_simpan') }}">
            {{ csrf_field() }}
            <br>
            <label>Username</label>
            <input type="text" name="username" placeholder="Masukkan Username">
            <br><br>
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan Nama">
            <br><br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Masukkan Password">
            <br><br>
            <label>Level ID</label>
            <input type="number" name="level_id">
            <br><br>
            <input type="submit" name="btn btn-success" value="Simpan">
        </form>
    </body>
</html>