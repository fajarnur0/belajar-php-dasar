<?php 
require 'koneksi.php';

$result = mysqli_query($conn, "SELECT * FROM mahasiswa");


$mahasiswa = mysqli_fetch_all($result, MYSQLI_ASSOC);
// var_dump($mahasiswa);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <h1><a href="tambah.php">tambah data</a></h1>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>NPM</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th colspan="2">Aksi</th>
            
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs):?>
            <tr>
                <td><?php echo $i;?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["npm"];?></td>
                <td><?= $mhs["jurusan"];?></td>
                <td><?= $mhs["fakultas"];?></td>
                <td><a href="hapus.php/?id=<?= $mhs["id"] ?>">Hapus</a></td>
                <td>Edit</td>
            </tr>
            <?php $i++; ?>
        <?php endforeach ?>
    </table>
</body>
</html>