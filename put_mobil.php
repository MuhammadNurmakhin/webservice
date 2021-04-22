<?php
	//include koneksi ke database
	include "conn.php";

	//echo "update buku";

	//menangkap variabel parameter get
	$id =$_GET['id'];
	//echo $id;

	//bagian ini yang akan/ingin di ubah
	$nama_perusahaan = $_POST['nama'];
	

	$sql = "UPDATE `` SET `nama_perusahaan` = '".$nama_perusahaan."'
	WHERE `mobil`.`id_mobil` = ".$id.";";
	//echo $sql;

		//running Query
		$query = mysqli_query($conn, $sql);
		if($query){
			$msg = "Update data mobil BERHASIL";
		}else{
			$msg = "Update data mobil GAGAL";
		}

		$response = array(
		'status' =>'Ok',
		'msg'=>$msg
		);

		echo json_encode($response);
?>
