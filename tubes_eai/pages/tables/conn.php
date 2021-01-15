<?php
$server_name = "localhost";
$username = "id15643829_warehouseapi";
$password = "SdOo6wVFy70}@3cM";
$db_name = "id15643829_db_warehouse";
$conn = mysqli_connect($server_name, $username, $password, $db_name);

if(!$conn){
    die("Koneksi gagal");
}
?>