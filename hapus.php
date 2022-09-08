<?php
if (isset($_GET['hapus'])) {
    $hapus = $_GET['hapus'];
}
include "koneksi.php";
$query = mysqli_query($db, "DELETE * FROM roles='$hapus'");
$result = mysqli_fetch_array($query);

if (!empty($hapus) && $hapus != "") {
    $hapus = "DELETE FROM roles WHERE id='$hapus'";
    $sql = mysqli_query($db, $hapus);
    if ($sql) {
        echo header("Location: table.php ");
    } else {
        echo "data gagal dihapus";
    }
}
