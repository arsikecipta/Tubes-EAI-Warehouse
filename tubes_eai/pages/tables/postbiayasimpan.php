<?php

$curl = curl_init();
$jenis= $_POST["jenis"];
$biaya = $_POST["biaya"];
$keterangan= $_POST["keterangan"];

curl_setopt_array($curl, array(
	CURLOPT_URL=>'https://finance03app.herokuapp.com/transaksis?access_token=eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjVmY2NlOTdlMThiNmVhMDAxNzdkNzVhNCIsImlhdCI6MTYwNzI2NDYzOH0.a_rp4lMl6qmEnCB5qbO4qdlJX5IHwyIDAMaLoNBO4lQ',
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING=>'',
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT =>0,
	CURLOPT_FOLLOWLOCATION=>true,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => 'POST',
	CURLOPT_POSTFIELDS => array('jenis'=> $jenis, 'biaya'=>$biaya, 'keterangan'=>$keterangan),

));
 if($response =curl_exec($curl) ){
	echo "<script>alert('Berhasil');window.location.href='formbiayasimpan.php'</script>";
 }else{
	 echo "ERROR, GAGAL!". mysqli_error();
 }
?> 
