<?php
include "koneksi.php";

$sql = "SELECT * FROM player";
$query = mysqli_query($db_con, $sql);
while ($data = mysqli_fetch_array($query)) {
    // echo $data["name"] . " ";

    $item[] = array(
        'nama' => $data["name"],
        'posisi' => $data["position"],
        'tinggi' => $data["height"],
        'berat' => $data["weight"]
    );
}

$respon = array(
    'status' => 'OK',
    'data' => $item
);

echo json_encode($respon);
