<?php
# generate dummy transaction
include_once("../autoload.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_GET["q"] == "donor") {

        $gol = ["A", "B", "AB", "O"];
        $sex = ["Laki-Laki", "Perempuan"];
        $table = $_GET["q"];
        // echo $table;
        $payload = json_decode(request("https://api.namefake.com/"), true);
        $nama = $payload["name"];
        $email = $payload["email_u"] . "@" . $payload["email_d"];
        $phone = $payload["phone_w"];
        $resus = rand(0, 1) == 0 ? "-" : "+";
        $gol = $gol[rand(0, 3)];
        $sex = $sex[rand(0, 1)];
        $conn->query("INSERT INTO DONOR VALUES(NULL, '$phone', '$nama','$resus','$gol','$sex','$email')") or die(mysqli_error($conn));
    } else {
        echo "generate transaksi";
        $result = $conn->query("SELECT * FROM donor");
        $conn->query("DELETE FROM transaksi");
        if ($result)
            while ($row = mysqli_fetch_assoc($result)) {
                $date_start = 1491164964; # 5 years ago
                $now = 1648956787; # now
                $day_offset = rand(0, 365 * 3); # day offset for start
                $date_start = $date_start + ($day_offset * 24 * 60 * 60);
                $start =  new DateTime(date("Y-m-d", $date_start));
                $totaldonor = 0;
                $isActive = rand(0, 4); # keaktifan dari sang pendonor, bila 0 maka lebih besar kemungkinan aktif
                while ($date_start < $now) {
                    $final_date = date("Y-m-d", $date_start);
                    // echo "generate transaction of " . $row['nama'] . " on $final_date";
                    // echo "\n";
                    $conn->query("INSERT INTO transaksi(id,id_pendonor,tanggal) values(null, " . $row["id"] . ",'$final_date')");
                    // echo mysqli_error($conn);
                    $date_start = $date_start + (rand(60, 100 + (30 * $isActive)) * 24 * 60 * 60);
                    $totaldonor++;
                }
                $end = new DateTime(date("Y-m-d", $date_start));
                $interval = $start->diff($end);
                $totalweek = $interval->days / 7;
                echo "total days: ";
                echo $interval->days;
                echo "\n";
                echo "total week: ";
                echo "$totalweek";
                echo "\n";
                echo "number donation blood: $totaldonor\n";
                $average = $totalweek / $totaldonor;
                echo "average: $average";
                echo "\n";
                // echo json_encode($row);
            }
    }

    exit;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div>
        <button onclick="generatedonor()">generate donor</button>
    </div>
    <div>
        <button onclick="generatetransaksi()">generate transaksi</button>
    </div>
    <div>
        <button onclick="deletedonor()">delete donor</button>
    </div>
    <div>
        <button onclick="deletetransaksi()">delete transaksi</button>
    </div>
    <script>
        function deletedonor() {
            $.ajax({
                method: "DELETE",
                url: "/utilities/generate.php?q=donor",
                success: (data) => {
                    console.log(data)
                }
            })
        }

        function deletetransaksi() {
            $.ajax({
                method: "DELETE",
                url: "/utilities/generate.php?q=transaksi",
                success: (data) => {
                    console.log(data)
                }
            })
        }

        function generatedonor() {
            $.ajax({
                method: "POST",
                url: "/utilities/generate.php?q=donor",
                success: (data) => {
                    console.log(data)
                }
            })
        }

        function generatetransaksi() {
            console.log("generate transaksi")
            $.ajax({
                method: "POST",
                url: "/utilities/generate.php?q=transaksi",
                success: (data) => {
                    console.log(data)
                }
            })
        }
    </script>
</body>

</html>