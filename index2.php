<?php
//connect on database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
//ambil data dari tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
//ambil data dari object result
//while ($mhs = mysqli_fetch_assoc($result) ){var_dump($mhs);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nim</th>
        <th>Nama</th>
        <th>Email</th>
        <th>jurusan</th>
    </tr>
    <?php $i = 1; ?>
    <?php while( $row = mysqli_fetch_assoc($result)) 
    : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">ubah</a> |
            <a href="">hapus</a>
        </td>

        <td><img src="" alt=""></td>
        <td><?=$row["nim"];?></td>
        <td><?=$row["nama"];?></td>
        <td><?=$row["email"];?></td>
        <td><?=$row["jurusan"];?></td>
    </tr>
    <?php $i++; ?>
    <?php endwhile; ?>
</table>

</body>
</html>