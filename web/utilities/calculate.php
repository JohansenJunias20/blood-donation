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
    $result = intval(predict($interval));
    $sql = "UPDATE DONOR SET aktif = $result where id = $id";
    $conn->query($sql);
}

$result = $conn->query("SELECT * FROM donor");
if ($result)
    while ($row = mysqli_fetch_assoc($result)) {
        calculate($row["id"], $conn);
    }
#endregion
