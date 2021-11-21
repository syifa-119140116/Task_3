<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pendaftaran</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1> Detail Informasi Pendaftar </h1>
        <div>
        <?php

        $nama=$_GET['nama'];
        $email=$_GET['email'];
        $telepon=$_GET['telepon'];
        $jk=$_GET['jk'];
        $alamat=$_GET['alamat'];


        if (isset($_GET['form_input']));{
        }
        ?>
        <br>
            <table id="table_info">
                <tr><td colspan="2" id="pendaftar">Pendaftar 1</td></tr>
                <tr><td>Nama</td><td><?php echo "$nama"; ?></td></tr>
                <tr><td>E-mail</td><td><?php echo "$email"; ?></td></tr>
                <tr><td>Nomor HP</td><td><?php echo "$telepon"; ?></td></tr>
                <tr><td>Jenis Kelamin</td><td><?php echo "$jk"; ?></td></tr>
                <tr><td>Alamat</td><td><?php echo "$alamat"; ?></td></tr>
            </table>
        </div>
        <footer>syifa syauqiyah</footer>
</body>
</html>