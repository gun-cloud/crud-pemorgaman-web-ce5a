<?php
$server = "localhost";
$uid = "root";
$pwd = "";
$database = "pendaftaran_siswa";

$db = mysqli_connect($server, $uid, $pwd, $database);

if (!$db) {
    echo "Error connecting to $database\n";
    exit();
}