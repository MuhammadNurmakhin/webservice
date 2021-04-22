<?php
    //Koneksi ke database mysql
    include "conn.php";

    //menambahkan variabel post
    $id_mobil = isset($_POST["id"]) ? $_POST["id"] : "";
    $nama_perusahaan = isset($_POST["nama"]) ? $_POST["nama"] : "";
    //echo $nama_perusahan;
    $merk_mobil = isset($_POST ["merk mobil"]) ? $_POST ["merk mobil"] : "";
    //echo $merk_mobil;  
    
    //Query menambahkan data
    $sql = "INSERT INTO `mobil` (`id_mobil`, `nama_perusahaan`, `merk_mobil`) VALUES ('".$id_mobil."', '".$nama_perusahaan."', '".$merk_mobil."')";
    //echo   $ql;

    //Running query
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "SIMPAN DATA MOBIL BERHASIL";
    }else{
        $msg = "SIMPAN DATA MOBIL GAGAL";
    }

    $response = array(
        'status'=>'OK',
        'msg' =>$msg
    );
    
    echo json_encode($response);
?>