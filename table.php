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

    <h2>TABLE ROLES</h2>
    <table border="1" cellpadding="4">
        <tr>
            <th>ROLES_ID</th>
            <th>NAMA_ROLES</th>
            <th colspan="2">AKSI</th>
        </tr>
        <?php

        $query = mysqli_query($db, "SELECT * FROM roles");
        while ($result = mysqli_fetch_array($query)) {


        ?>
            <tr>
                <td><?php echo $result['id'] ?></td>
                <td><?php echo $result['nama'] ?></td>
                <td><a href="detail.php?id=<?= $result['id'] ?>">DETAIL</a></td>
                <td><a href="hapus.php?hapus=<?= $result['id'] ?>">HAPUS</a></td>

                <!-- mengambil get dari url yaitu stelah ?id -->
            <?php
        }
            ?>


            <form method="POST" action="tambahin.php">
                <input type="text" name="nama" />
                <button type="submit" value="submit">TAMBAHKAN DATA</button>

            </form>
            <br></br>
            <table id="example1" class="table table-bordered table-striped">