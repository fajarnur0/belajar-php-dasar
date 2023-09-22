<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object</title>
</head>
<body>
<?php 
class mahasiswa {
    public $nama = "Yunus";
    public $ciri = "Beban Tim Mobile legends";

    public function perkenalan(){
        echo "<h1>Halo, perkenalkan nama saya $this->nama </h1> <br>";
    }

    

}

$mahasiswa1 = new mahasiswa();
$mahasiswa1->perkenalan();
?>
    
</body>
</html>