<?php
	include "conn.php";
	//menangkap variabel parameter get
	$id =$_GET['id'];
	//echo $id;

	$sql = " DELETE FROM mobil WHERE `id_mobil` = ".$id.";";
	//echo $sql;
	//running Query
	$query = mysqli_query($conn, $sql);
	if($query){
		$msg = "DELET DATA MOBIL BERHASIL";
	}else{
		$msg = "DELET DATA MOBIL GAGAL";
	}

	//echo $msg;
	//echo 'test';
	$response = array(
		'status' =>'Ok',
		'msg'=>$msg
	);

	echo json_encode($response);
?>