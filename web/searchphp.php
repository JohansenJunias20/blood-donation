<?php require_once('autoload.php');

$id = $_POST['search'];

$log = "SELECT * FROM donor WHERE id = '$id'" ;
$login = $conn->query($log);

$log2 = "SELECT * FROM donor WHERE id = '$id'";
$rol2 = mysqli_query($conn,$log2) -> fetch_all(MYSQLI_ASSOC);

$var = "LOGIN GAGAL";   

if($login->num_rows > 0)
{
    $_SESSION["id2"] = $rol2[0];
    // $a = $_SESSION["id2"];
    // var_dump($a['nama']);
    header("Location: search.php");
}
else
{
    
}
?>