<?php

$curl = curl_init();
$id= $_POST["id"];
$nama = $_POST["nama"];
$jenis= $_POST["jenis"];
$jumlah=$_POST["jumlah"];
$satuan=$_POST["satuan"];

curl_setopt_array($curl, array(
	CURLOPT_URL=>'https://procurementmanufaktur.000webhostapp.com/postpb.php',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING=>'',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT =>0,
	CURLOPT_FOLLOWLOCATION=>true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS => array('id'=> $id, 'nama'=>$nama, 'jenis'=>$jenis, 'jumlah'=>$jumlah,'satuan'=>$satuan),

));
 if($response =curl_exec($curl) ){
	echo "<script>alert('Berhasil');window.location.href='formpermintaanbarang.php'</script>";
 }else{
	 echo "ERROR, GAGAL!". mysqli_error();
 }
?> 
