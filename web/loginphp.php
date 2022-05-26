<?php require_once('autoload.php');

$username = $_POST['username'];
$password = $_POST['password'];

$log = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$login = $conn->query($log);

$log2 = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$rol2 = mysqli_query($conn,$log2) -> fetch_all(MYSQLI_ASSOC);

$var = "LOGIN GAGAL";   

if($login->num_rows > 0)
{
    header("Location: list.php");  
    echo "redirected";
}
else
{
    
}
$conn->close();
echo "test";
?>

