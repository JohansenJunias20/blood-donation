<?php

include "connect.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // insert new profile donor to table donor
    $sql = "INSERT INTO transaksi(id, id_pendonor, tanggal) values(null, '" . $_POST['id'] . "', '" . date("Y-m-d") . "')";
    $query = mysqli_query($con, $sql);
    if ($query)
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    else
        echo "failed!";
} else {
    header("HTTP/1.1 400 Bad Request");
    $error = array(
        'error' => 'Method not Allowed'
    );

    echo json_encode($error);
}
