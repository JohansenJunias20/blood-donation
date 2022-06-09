<?php require_once('autoload.php');

$nama = $_POST['username'];
$password = $_POST['password'];
$password_admin = $_POST['adm-password'];
$log = "SELECT * FROM user";
$login = $conn->query($log);

$log = "SELECT password FROM user where username = 'admin' and password = '$password_admin'";
$result = $conn->query($log);
# check if password admin is correct
if ($result->num_rows > 0) {
    # check if the username is already registered
    $sql = "SELECT * FROM user WHERE username = '$nama'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        # if the username is already registered, then redirect back to register page with parameter error
        header("Location: Register.php?error=Username Already Registered");
    } else {
        $sql = "INSERT INTO user 
        VALUES (0, '$nama', '$password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: Login.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} else {
    header("Location: Register.php?error=Password Incorrect");
}
