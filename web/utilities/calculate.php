<?php
# kalkulasi sebuah pendonor apakah dia aktif atau tidak, hasilnya diinsert pada tabel donor
// include_once("../autoload.php");
// if ($_SERVER['REQUEST_METHOD'] != 'POST') {
//     echo "unsupported method";
// }
// if (!isset($_GET["id"])) {
//     die("id required");
//     exit;
// }

use function PHPSTORM_META\map;

include_once("../autoload.php");

#region periode semuanya
function calculate($id, $conn)
{
    $sql = "SELECT count(*) as total FROM TRANSAKSI WHERE ID_PENDONOR = $id";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $totaldonor = $data['total'];

    $sql = "SELECT MIN(tanggal) as firsttime FROM TRANSAKSI WHERE ID_PENDONOR = $id";
    $result = $conn->query($sql);
    $data = mysqli_fetch_assoc($result);
    $first_time = $data['firsttime'];
    $first_time = new DateTime($first_time);
    $end_time = new DateTime('now');
    $days_diff = $end_time->diff($first_time)->days;
    $totalweeks = $days_diff / 7;
    if ($totaldonor == 0)
        $interval = 0;
    else
        $interval = $totalweeks / $totaldonor;


    echo "<br>";
    echo "<br>";
    echo "id: $id";
    echo "<br>";
    echo "interval: $interval";
    echo "<br>";
    echo "totalweeks: $totalweeks";
    echo "<br>";

    $sql = "SELECT UNIX_TIMESTAMP(tanggal) FROM TRANSAKSI WHERE ID_PENDONOR = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $data = $result->fetch_all(MYSQLI_NUM);
        $data = array_map(fn ($value) => $value[0], $data);
    } else {
        $data = [];
    }
    echo "response: ".predict($interval, $totaldonor, $data);
    // $result = intval(predict($interval, $totaldonor, $data));
    // $sql = "UPDATE DONOR SET aktif = $result where id = $id";
    // $conn->query($sql);
}

$result = $conn->query("SELECT * FROM donor");
if ($result)
    while ($row = mysqli_fetch_assoc($result)) {
        calculate($row["id"], $conn);
    }
#endregion
