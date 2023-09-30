<?php
include "koneksi.php";

//dapat variabel
$id_player = $_POST["id_player"];
// echo "update";

//data yang ingin di update
$name = $_POST["name"];
$position = $_POST["position"];

//nambah data
$sql = "UPDATE player SET name = '$name', position = '$position' WHERE id_player = $id_player";

// echo $sql;


//run
$query = mysqli_query($db_con, $sql);
// echo json_encode($id_player);
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
