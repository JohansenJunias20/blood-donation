<?php require_once('autoload.php');
$nama = $_POST['username'];
$password = $_POST['password'];

$log = "SELECT * FROM user";
$login = $conn->query($log);

$sql = "INSERT INTO user 
VALUES (0, '$nama', '$password')";

if ($conn->query($sql) === TRUE) 
{
    header("Location: Login.php");  
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>