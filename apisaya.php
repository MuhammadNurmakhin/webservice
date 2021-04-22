<?php
    //koneksi ke database mysql
    include "conn.php";

    //Membuat query/sql untuk mengambil seluruh data mobil
    $sql = "SELECT * FROM mobil";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        //echo $data["nama_perusahaan"]." ";

        $item[] = array(
            'id'=>$data["id_mobil"],
            'nama'=>$data["nama_perusahaan"],
            'merk'=>$data["merk_mobil"],
        );
}

$response = array(
    'status'=>'OK',
    'data' =>$item
);

echo json_encode($response);
?>