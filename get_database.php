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

    <h2>RINCIAN PRODUK</h2>
    <table border="1" cellpadding="4">
        <tr>
            <th>ID</th>
            <th>NAMA_PRODUK</th>
            <th>HARGA_PRODUK</th>
        </tr>
        <?php
        $no = 0;
        $harga = 0;
        $jumlah = 0;
        $query = mysqli_query($db, "SELECT * FROM produk order by Id");
        while ($result = mysqli_fetch_array($query)) {
            $no++;
            $jumlah  += $result['harga_produk'];

        ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $result['nama_produk'] ?></td>
                <td><?php echo $result['harga_produk'] ?></td>
            <?php
        }
            ?>

            <tr>
                <td colspan="1" align="left">JUMLAH</td>
                <td colspan="5" align="center"><?php echo $jumlah; ?></td>
            </tr>

            <?php


            $query = mysqli_query(
                $db,
                "SELECT users.name, users.email, profil.tanggal_lahir, profil.tempat_lahir
            FROM users
            INNER JOIN profil ON profil.id = users.id
            "
            );

            ?>
            <table border="1" align="right" cellpadding="4">
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


                <?php
                $no = 0;

                $query = mysqli_query(
                    $db,
                    "SELECT o.identifier, p.nama_produk, p.harga_produk, o.qty, o.payment_method, o.total
                    FROM produk as p
                    INNER JOIN orders_product as r ON p.id = r.product_id
                    INNER JOIN orders as o ON o.id = r.order_id
                    "
                );

                ?>
                <table border="1" cellpadding="4">

                    <tr>
                        <th>ID</th>
                        <th>IDENTIFIER</th>
                        <th>NAMA_PRODUK</th>
                        <th>HARGA_PRODUK</th>
                        <th>QTY</th>
                        <th>PEMBAYARAN</th>
                    </tr>

                    <?php

                    $total = 0;

                    while ($result = mysqli_fetch_array($query)) {
                        $no++;
                        $total = $result['total'];

                    ?>
                        <tr>


                            <td><?php echo $no ?></td>
                            <td><?php echo $result['identifier']; ?></td>
                            <td><?php echo $result['nama_produk']; ?></td>
                            <td><?php echo $result['harga_produk']; ?></td>
                            <td><?php echo $result['qty']; ?></td>
                            <td><?php echo $result['payment_method']; ?></td>

                        </tr>

                    <?php } ?>

                    <tr>
                        <td colspan="1" align="left">TOTAL</td>
                        <td colspan="5" align="center"><?php echo $total; ?></td>
                    </tr>

                    <tr>
                        <td colspan="1" align="left">TOTAL HARGA</td>
                        <td colspan="5" align="center">7100</td>



                    </tr>
                </table>
</body>

</html>