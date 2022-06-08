<?php require_once('autoload.php');
if(isset($_GET['id_donor'])){
    $delsqltransaksi = "DELETE FROM transaksi WHERE id_pendonor = {$_GET['id_donor']}";
    $delsqluser = "DELETE FROM donor WHERE id = {$_GET['id_donor']}";
    mysqli_query($conn, $delsqltransaksi);
    mysqli_query($conn, $delsqluser);
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
    

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
        <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.print.min.js"></script>

    <script src="js/bootstrap.bundle.min.js.download"></script>
    <script src="js/feather.min.js.download"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <script src="js/app.js"></script>
    <script>
        load_ranking()
    </script>
    <style>
        * {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }
        
    body {
            background-color: #F6B3B3;

        }
    .table {
        background-color: white;
    }

      
      li, a{
              font-size: 20px;
              color: #edf0f1;
              text-decoration: none;
              font-style: bold;
          }

      button{
          
          font-size: 16px;
      }

      header {
            display:flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 10%;
            background-color: #420111;
        }

      nav{
          background-color: #BB002D;
      }
      .logo {
          cursor: pointer;
       
      }

      .nav_link{
          list-style: none;
          background-color: #BB002D;
          border: #BB002D;
      }

      .nav_link li{
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

      button:hover{
          background-color: rgba(220,220,220,0.8);
      }
    </style>
  </head>
      
    <body>
    <header>
      <a href="list.php"><img src="Asset/Logo PMI.png" width="120px"alt="" class="logo"></a>
       
      <a href="Login.php" class="cta"><button>Log Out</button></a>
    </header>
        <br>
        <h2 style="text-align: center;">Ranking</h2>
        <div class="container">
        <div class="row">

            <div class="col-md-8">
                
            </div>
    </div>
    <table class="table" id="tableRanking">
        <thead id="rankingHeader">
            <tr>
                <th>Check</th>
                <th>Name</th>
                <th>Blood Type</th>
                <th>Rhesus</th>
                <th>Email</th>
                <th>Active</th>
                <th>Score</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody id="rankingTable">
        </tbody>
        <tfoot>
            <tr>
                <th>Check</th>
                <th>Name</th>
                <th>Blood Type</th>
                <th>Rhesus</th>
                <th>Email</th>
                <th>Active</th>
                <th>Score</th>
                <th>Delete</th>
            </tr>
        </tfoot>

    </table>


</body>

</html>