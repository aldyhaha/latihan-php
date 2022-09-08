<?php
include "koneksi.php";
?>

<?php
if ($_POST) {
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $insert = mysqli_query($db, "INSERT INTO roles SET nama='$nama' ");
    if ($insert) {
        header("Location: table.php");
    } else {
        echo 'Data gagal';
    }
};



?>