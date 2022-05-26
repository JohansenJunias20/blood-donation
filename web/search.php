<?php require_once('autoload.php');
if (!isset($_SESSION["id2"]))
    $id["id"] = 1;
else
    $id = $_SESSION["id2"];

$nilai = "SELECT * FROM donor WHERE id = '$id[id]'";
$resultid = mysqli_query($conn, $nilai)->fetch_all(MYSQLI_ASSOC);

$nilai2 = "SELECT *,UNIX_TIMESTAMP(tanggal) unix  FROM transaksi WHERE id_pendonor = '$id[id]'";
$resulttransaksi = mysqli_query($conn, $nilai2)->fetch_all(MYSQLI_ASSOC);
$sql = "SELECT UNIX_TIMESTAMP(tanggal) FROM TRANSAKSI WHERE ID_PENDONOR = '$id[id]'";
$resultunix = array_map(fn ($value) => $value['unix'], $resulttransaksi);
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;

        }

        body {
            background-color: #F6B3B3;

        }

        li,
        a {
            font-size: 20px;
            color: #edf0f1;
            text-decoration: none;
            font-style: bold;
        }

        button {
            font-size: 16px;

        }

        header {
            display:flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10%;
            background-color: #BB002D;
        }

        nav {
            background-color: #BB002D;
        }

        .logo {
            cursor: pointer;
            background-color: #BB002D;
        }

        .nav_link {
            list-style: none;
            background-color: #BB002D;
            border: #BB002D;
        }

        .nav_link li {
            display: inline-block;
            padding: 0px 20px;
            background-color: #BB002D;
        }

        .nav_link li a {
            transition: all 0.3s ease 0;
            background-color: #BB002D;
        }

        .nav_link li a.hover {
            color: #0088a9;
        }

        button {
            padding: 9px 20px;
            background-color: rgba(220,220,220,1);
            border: none;
            border-radius: 30px;
            cursor: pointer;
            transition: all 0.3s ease 0;
        }

        button:hover {
            background-color: rgba(220, 220, 220, 0.8);
        }

        .search-container {
            display: flex;
            justify-content: center;
        }

        .kartu {
            width: 90%;
            margin: 0 auto;
            margin-top: 10px;
            margin-bottom: 10px;
            box-shadow: 0 0.25rem 0.75rem rgba(0, 0, 0, .03);
            transition: all .3s;
        }

        tbody {
            font-size: 17px;
            font-weight: 300;
        }

        .biodata {
            padding: 10px;
        }
    </style>
</head>

<body>

    <header>
      <a href="list.php"><img src="Asset/Icon.png" width="120px"alt="" class="logo"></a>
       
      <a href="Login.php" class="cta"><button>Log Out</button></a>
    </header>

    <div class="search-container" style="padding:20px;">
        <form action="searchphp.php" method="post">
            <input type="text" placeholder="Masukkan ID" name="search" id="search" style="width:600px; height: 30px; padding: 10px;">

        </form>

    </div>

    <!-- jika data ada -->
    <div class="card kartu">
        <div class="row">
            <div class="col-md-8 kertas-biodata">
                <div class="biodata">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <table width="100%" style="padding-left: 2px; padding-right: 13px;">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <h3>Donor's Profile</h3>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td width="45%" valign="top" class="textt">Name</td>
                                                <td width="2%">:</td>
                                                <td style="color: rgb(118, 157, 29); font-weight:bold"><?php echo $resultid[0]['nama']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Gender</td>
                                                <td>:</td>
                                                <td><?php echo $resultid[0]['jenis kelamin']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Blood Type</td>
                                                <td>:</td>
                                                <td><?php echo $resultid[0]['golongan darah']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Rhesus</td>
                                                <td>:</td>
                                                <td><?php echo $resultid[0]['resus']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Email</td>
                                                <td>:</td>
                                                <td><?php echo $resultid[0]['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Phone Number</td>
                                                <td>:</td>
                                                <td><?php echo $resultid[0]['nomor HP']; ?></td>
                                            </tr>
                                            <hr>
                                            <tr>
                                                <td class="textt">Total Blood Donation</td>
                                                <td>:</td>
                                                <td><?php
                                                    $result = $conn->query("select count(*) as total from transaksi where id_pendonor = $id[id]");
                                                    $row = mysqli_fetch_assoc($result);
                                                    echo $row["total"];
                                                    ?> times</td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Date Joined</td>
                                                <td>:</td>
                                                <td><?php
                                                    $result = $conn->query("select concat( TIMESTAMPDIFF(WEEK, MIN(tanggal), now()),' week or ', TIMESTAMPDIFF(MONTH, MIN(tanggal), now()), ' month' ) as firstime from transaksi where id_pendonor = $id[id]");
                                                    $row = mysqli_fetch_assoc($result);
                                                    echo $row["firstime"];
                                                    ?></td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Status</td>
                                                <td>:</td>
                                                <td><?php
                                                    $result = $conn->query("select aktif from donor where id = $id[id]");
                                                    $row = mysqli_fetch_assoc($result);
                                                    echo $row["aktif"] == 1 ? "Active" : "Non-Active";
                                                    ?></td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="textt"><button type="button" data-toggle="modal" data-target="#editModal" class="btn btn-danger">Edit Profile</button></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- jika data tidak ada -->
    <!-- <div class="card kartu">
        <div class="row">
            <div class="col-md-8 kertas-biodata">
                <div class="biodata">
                    <tr>
                        <td><h3>Profile Pendonor</h3></td>
                    </tr>
                    <p>No Result.</p>
                </div>
            </div>
        </div>
    </div> -->

    <!-- jika data tidak ada -->
    <div class="card kartu">
        <div class="row">
            <div class="col-md-8 kertas-history">
                <div class="biodata">
                    <tr>
                        <td>
                            <h3>History</h3>
                        </td>
                    </tr>
                    <div class="container">
                        <table class="table table-hover" id="taberu">
                            <thead>
                                <tr>
                                    <th>ID </th>
                                    <th>Donor's ID</th>
                                    <th>Date</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $unix_dates = array_map(fn ($x) => strtotime($x["tanggal"]), $resulttransaksi);
                                $result_cluster = explode( ",",cluster($resultunix));
                                $i = 0;
                                foreach ($resulttransaksi as $key => $value) { ?>
                                    <tr style="background-color: <?= $result_cluster[$i] == "old" ? "#FFCCCC" : "#C4FFFC" ?>">
                                        <td>
                                            <?php
                                            echo $value['id'];
                                            ?>
                                        </td>

                                        <td>
                                            <?php
                                            echo $value['id_pendonor'];
                                            ?>
                                        </td>

                                        <td>
                                            <?php
                                            echo $value['tanggal'];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                            echo $result_cluster[$i];
                                            ?>
                                        </td>
                                    </tr>
                                <?php
                                    $i++;
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
</body>
</div>
</div>
</div>
</div>

<!-- modal edit profile     -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Edit Profile!</h3>
            </div>

            <form id="form_daftar" method="post">
                <div class="modal-body mx-3">
                    <label>Name</label>
                    <input name="name" id="name" class="form-control">
                    </br>

                    <label>Sex</label>
                    <select name="gender" id="gender" class="form-control">
                        <option value="Male">Laki-Laki</option>
                        <option value="Female">Perempuan</option>
                    </select>
                    </br>

                    <div class='form-row'>
                        <div class='col-ss-4 form-group'>
                            <label>Blood Type</label>
                            <input type="text" name="bloodtype" id="bloodtype" size='2' class="form-control">
                        </div>
                        <div class='col-xs-4 form-group '>
                            <label class='control-label'>Rhesus</label>
                            <select name="rhesus" id="rhesus" class="form-control">
                                <option value="+">+</option>
                                <option value="-">-</option>
                            </select>
                        </div>
                    </div>

                    <label>Email</label>
                    <input name="email" id="email" class="form-control">
                    </br>

                    <label>Phone</label>
                    <input name="phone" id="phone" class="form-control">
                    </br>

                    <div class="modal-footer">
                        <div id="keterangan"></div>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" id="submit_daftar" name="submit_daftar" class="btn btn-danger"><i class="lnr lnr-plus-circle"></i> Edit!</button>
                    </div>
            </form>
        </div>
    </div>
    </body>

</html>