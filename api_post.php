<?php
include "koneksi.php";


//dapat variabel
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$position = isset($_POST["position"]) ? $_POST["position"] : "";
$height = isset($_POST["height"]) ? $_POST["height"] : "";
$weight = isset($_POST["weight"]) ? $_POST["weight"] : "";

//nambah data
$sql = "INSERT INTO player(name, position, height, weight) 
VALUES ('$name', '$position', '$height', '$weight')";

// echo $sql;

//run
$query = mysqli_query($db_con, $sql);
if ($query) {
    $msg = "data berhasil disimpan";
} else {
    $msg = "data gagal disimpan";
}
// echo $msg;

$respon = array(
    'status' => 'OK',
    'msg' => $msg
);

echo json_encode($respon);
