<?php
include_once("calculate.php");
# halaman ini dipanggil untuk menghitung ulang keaktifan semua pendonor


$result = $conn->query("SELECT * FROM donor");
if ($result)
    while ($row = mysqli_fetch_assoc($result)) {
        calculate($row["id"], $conn);
    }

echo "success";
