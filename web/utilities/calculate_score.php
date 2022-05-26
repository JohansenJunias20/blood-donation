<?php
include_once("../autoload.php");
function calculate_score($id, $conn)
{
    $sql = "SELECT tanggal FROM TRANSAKSI WHERE ID_PENDONOR = $id";
    $result = $conn->query($sql);
    $score = 0;
    $score_ = 10;
    $last_date = null;
    while ($row = mysqli_fetch_assoc($result)) {
        $date = strtotime($row['tanggal']);
        if ($last_date) {
            $diff = round(($date - $last_date) / (24 * 60 * 60));
            if ($diff <= 90) {
                $score_ += 10;
            } else {
                $score = 10; # reset
            }
        }


        $score += $score_;
        $last_date = $date;
    }
    // insert scor to tabel donor
    $sql = "UPDATE DONOR SET SCORE = $score WHERE ID = $id";
    $conn->query($sql);

    echo "id: $id, score: $score<br>";
}

$result = $conn->query("SELECT * FROM donor");
if ($result)
    while ($row = mysqli_fetch_assoc($result)) {
        calculate_score($row["id"], $conn);
    }
