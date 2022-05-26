<?php

include "connect.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // insert new profile donor to table donor
    $sql = "INSERT INTO DONOR(id, `nomor HP`, nama, resus, `golongan darah`, `jenis kelamin`, `email`, aktif, score) values(null, '" . $_POST['phone'] . "', '" . $_POST['name'] . "', '" . $_POST['rhesus'] . "', '" . $_POST['bloodtype'] . "', '" . $_POST["gender"] . "', '" . $_POST['email'] . "', 0, 0)";
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
