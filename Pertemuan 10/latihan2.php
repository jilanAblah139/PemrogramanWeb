<?php
$server="localhost";
$password="";
$username="root";
$database = "pemweb";

$koneksi = mysqli_connect($server, $username, $password, $database);
if (!$koneksi) {
    die("Koneksi database gagal: ".mysqli_connect_error());
}
echo"database terkoneksi";

?>
