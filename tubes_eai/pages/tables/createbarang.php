<?php

$kode_barang = $_POST['kode_barang'];
$nama_barang = $_POST['nama_barang'];
$satuan_barang = $_POST['satuan_barang'];
$jenis_barang = $_POST['jenis_barang'];
$harga_barang = $_POST['harga_barang'];
$stock_barang = $_POST['stock_barang'];

$data = "INSERT INTO listallbarang(id_barang, id_lokasi, kode_barang,nama_barang,satuan_barang,jenis_barang,harga_barang,stock_barang) VALUES (NULL, NULL, '$kode_barang', '$nama_barang','$satuan_barang', '$jenis_barang' , '$harga_barang', '$stock_barang')";
$simpan = $db->query($data);
$message="Data Berhasil Ditambahkan!";
if ($simpan) {
  echo "<SCRIPT> //not showing me this
  alert('$message')
  window.location.replace('home.php');
</SCRIPT>";
}
?>