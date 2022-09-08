<?php
if (isset($_GET['id'])) {
    $roles_id = $_GET['id'];
}
include "koneksi.php";
$query = mysqli_query($db, "SELECT * FROM roles WHERE id='$roles_id'");
$result = mysqli_fetch_array($query);
?>




<html>

<head>
    <title>DETAIL ROLES</title>
</head>

<body>
    <tr>
        <td size="90">ROLES ID</td>
        <td>: <?php echo $result['id'] ?></td>
    </tr>
    <tr>
        <td size="90">NAMA ROLES</td>
        <td>: <?php echo $result['nama'] ?></td>
    </tr>
</body>

</html>