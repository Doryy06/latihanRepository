<?php
$nama = $_POST ['nama'];
$email = $_POST ['email'];
$alamat = $_POST ['alamat'];
$program  = $_POST ['program'];
$tahun = $_POST ['tahun'];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.1.3-dist/css/bootstrap.css">
</head>

<body>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-12">
                <table class="table" text-alignt="center">
                    <thead class="table-dark">
                        <tr>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Alamat</th>
                            <th>Program Pelatihan</th>
                            <th>Tahun Pendaaftaran</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?php echo $nama?></td>
                            <td><?php echo $email?></td>
                            <td><?php echo $alamat?></td>
                            <td><?php echo $program?></td>
                            <td><?php echo $tahun?></td>
                        </tr>
                    </tbody>
                </table>
                

</body>

</html>