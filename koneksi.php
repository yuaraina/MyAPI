<?php
$db_server = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "basket_game";

$db_con = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

if (!$db_con) {
    echo "<script>
            alert('failed connect into database')
          </script>";
}
