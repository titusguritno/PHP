<?php
require 'functions.php';
//cek submit sudah ditekan atau belum
if( isset($_POST["submit"])) {
    //cek data berhasil ditambahkan atau tidak
    if( tambah($_POST) > 0) {
        echo "Data Berhasil Ditambahkan!";
    } else {
        echo "Data Gagal Ditambahkan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

    <h1>Tambah Data Mahasiswa</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama">
            </li>

            <li>
                <label for="nim">Nim : </label>
                <input type="text" name="nim">
            </li>

            <li>
                <label for="email">Email : </label>
                <input type="text" name="email">
            </li>

            <li>
                <label for="jurusan">Jurusan : </label>
                <input type="text" name="jurusan">
            </li>

            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar">
            </li>

            <li>
                <button type="submit" name="submit">Tambah</button>
            </li>
        </ul>

    </form>
    
</body>
</html>