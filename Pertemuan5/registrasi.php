<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    <style>
        form{
            display: table;
        }

        p{
            display: table-row;
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }
        
        label, input{
            display: table-cell;
            margin-top: 5px;
        }

        .regis{
            background-color: gray;
            width: 550px;
            height: 375px;
            margin: auto;
            margin-top: 75px;
            padding: 10px;
            border-radius: 10px;
        }

        .judul{
            text-align: center;
        }

        .form {
            display: flex;
            justify-content: center;
            margin: auto;
        }
    </style>
</head>
<body>
    <div class="regis">
        <div class="judul">
            <h1>Formulir Pendaftaran</h1>
        </div>
        
        <div class="form">
            <fieldset>
                <legend>Registrasi</legend>
                <form action="proses_reg.php" method="post">
                    <p>
                        <label>Nama : </label>
                        <input type="text" name="nama" placeholder="Masukan Nama Lengkap">
                    </p>
                    <p>
                        <label>Username : </label>
                        <input type="text" name="username" placeholder="Masukan Nama Panggilan">
                    </p>
                    <p>
                        <label>Email : </label>
                        <input type="email" name="email" placeholder="example@gmail.com">
                    </p>
                    <p>
                        <label>Password : </label>
                        <input type="password" name="password" placeholder="Masukan Password">
                    </p>
                    <p>
                        <label>Jenis Kelamin: </label>
                        <label><input type="radio" name="jenis_kelamin" value="Laki-Laki"> Laki-Laki</label>
                        <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                    </p>
                    <p>
                        <label>Agama :</label>
                        <select name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Konghucu">Konghucu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </p>
            
                    <p>
                        <label>Biografi : </label>
                        <textarea name="biografi" placeholder="Masukan biografi"></textarea>
                    </p>
                    <p>
                        <input type="submit" name="Submit" value="Daftar">
                    </p>
                    </form>
                </fieldset>
        </div>
    
    </div>
    
</body>
</html>