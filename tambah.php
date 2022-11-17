<?php
//connect ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//cek submit sudah ditekan aatu belum
if( isset($_POST["submit"])) {
    $nama = $_POST["nama"];
    $nim = $_POST["nim"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    $query = "INSERT INTO mahasiswa values('', '$nama', '$nim','$email', '$jurusan', '$gambar')";
    mysqli_query($conn, "$query");
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