<?php

$curl = curl_init();
$ID_Pengiriman= $_POST["ID_Pengiriman"];
$id_barang = $_POST["ID_Barang"];
$jenis_pengiriman= $_POST["Jenis_Pengiriman"];
$tgl_pengiriman=$_POST["Tanggal_Pengiriman"];

curl_setopt_array($curl, array(
	CURLOPT_URL=>'https://mobillogistik.000webhostapp.com/postPengiriman.php',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING=>'',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT =>0,
	CURLOPT_FOLLOWLOCATION=>true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS => array('ID_Pengiriman'=> $ID_Pengiriman, 'ID_Barang'=>$id_barang, 'Jenis_Pengiriman'=>$jenis_pengiriman, 'Tanggal_Pengiriman'=>$tgl_pengiriman),

));
 if($response =curl_exec($curl) ){
	echo "<script>alert('Berhasil');window.location.href='formpengirimanbarang.php'</script>";
 }else{
	 echo "ERROR, GAGAL!". mysqli_error();
 }
?> 
