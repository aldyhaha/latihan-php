<?php

$host       = 'localhost';
$username   = 'root';
$password   = '';
$dbname     = 'belajar_database';

$db = mysqli_connect($host, $username, $password, $dbname);

if ($db) {
    echo "database terhubung";
}
