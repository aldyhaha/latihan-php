<?php
if (isset($_GET['hapus'])) {
    $hapus = $_GET['hapus'];
}
include "koneksi.php";

$query = "SELECT * FROM roles WHERE id='$hapus'";
$kirim_mysql = mysqli_query($db, $query);
$hasil = mysqli_fetch_array($kirim_mysql);
if ($hasil) {
    if (!empty($hapus) && $hapus != "") {
        $query = "DELETE FROM roles WHERE id='$hapus'";
        $hasil = mysqli_fetch_array($kirim_mysql);
        $sql = mysqli_query($db, $query);
        if ($sql) {
            echo "DATA BERHASIL DIHAPUS";
        }
    }
} else {
    echo "DATA GAGAL DIHAPUS";
}
