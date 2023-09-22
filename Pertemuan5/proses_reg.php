<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tampil Data</title>
</head>
<body>
    <h2>Data Registrasi</h2>
    <pre>Nama           : <?php echo $_POST['nama'] . "<br>";?></pre>
    <pre>Username       : <?php echo $_POST['username']. "<br>";?></pre>
    <pre>Email          : <?php echo $_POST['email']. "<br>";?></pre>
    <pre>Password       : <?php echo $_POST['password']. "<br>";?></pre>
    <pre>Jenis Kelamin  : <?php echo $_POST['jenis_kelamin']. "<br>";?></pre>
    <pre>Agama          : <?php echo $_POST['agama']. "<br>";?></pre>
    <pre>Biografi       : <?php echo $_POST['biografi']. "<br>";?></pre>

</body>
</html>