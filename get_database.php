<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>PRODUK</h2>
    <table border="1" cellpadding="4">
        <tr>
            <th>ID</th>
            <th>NAMA_PRODUK</th>
            <th>HARGA_PRODUK</th>
        </tr>
        <?php
        $no = 0;
        $query = mysqli_query($db, "SELECT * FROM produk order by Id");
        while ($result = mysqli_fetch_array($query)) {
            $no++
        ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $result['nama_produk'] ?></td>
                <td><?php echo $result['harga_produk'] ?></td>
            <?php
        }
            ?>

            <?php

            $query = mysqli_query(
                $db,
                "SELECT users.name, users.email, profil.tanggal_lahir, profil.tempat_lahir
            FROM users
            INNER JOIN profil ON profil.id = users.id
            "
            );

            ?>
            <table border="1" cellpadding="4">
                <tr>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>TANGGAL_LAHIR</th>
                    <th>TEMPAT_LAHIR</th>
                </tr>

                <?php

                while ($result = mysqli_fetch_array($query)) {

                ?>


                    <tr>

                        <td><?php echo $result['name'] ?></td>
                        <td><?php echo $result['email'] ?></td>
                        <td><?php echo $result['tanggal_lahir'] ?></td>
                        <td><?php echo $result['tempat_lahir'] ?></td>
                    </tr>

                <?php } ?>

            </table>
</body>

</html>