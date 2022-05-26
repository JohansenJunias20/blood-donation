<?php

include "connect.php";

header("Content-Type: application/json");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //update profile donor from form
    $sql = "UPDATE DONOR SET NAMA = '" . $_POST['name'] . "', `jenis kelamin` = '" . $_POST['gender'] . "', email = '" . $_POST['email'] . "', `nomor HP` = '" . $_POST['phone'] . "', EMAIL = '" . $_POST['email'] . "' WHERE ID = '" . $_POST['id'] . "'";
    $query = mysqli_query($con, $sql);
    if ($query)
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    else
        header('Location: ' . $_SERVER['HTTP_REFERER']);
} else {
    header("HTTP/1.1 400 Bad Request");
    $error = array(
        'error' => 'Method not Allowed'
    );

    echo json_encode($error);
}
