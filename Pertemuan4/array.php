<?php 
    $mahasiswa =  [
        "Yusril Gicok",
        "Sir Fajar",
        "Anzar Rahma"
    ];

    $jurusan = array(
        "Informatika",
        "Teknik Sipil",
        "Kedokteran Tumbuhan"
    );

    // ARRAY ASOSIATIF
    $Siswa = [
        "Nama" => "Sir Fajar Conan Doyle",
        "NIS" => "227006077"
    ];

    // ARRAY MULTIDIMENSI
    $array_multi = [
        "Fajar Nurdiansyah",
        19,
        True,
        [100, 2200, 31, 1]
    ];

echo "<h1>Nama : $mahasiswa[0]</h1>";
echo "<h1>Jurusan : $jurusan[2]</h1>";
echo "Siswa : {$Siswa['Nama']} <br>";
echo $array_multi[3][1];
?>