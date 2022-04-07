<!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
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
        table {
            border-collapse: collapse;
            width: 80%;
            color: black;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
        }
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        table.center {
            margin-left: auto; 
            margin-right: auto;
        }
        th {
            background-color: #d96459;
            color: white;
        }
        tr:nth-child(even) {background-color: #f2f2f2}

      body{
          background-color: #F6B3B3;
      }
      .container{
          display: flex;
          justify-content: center;
          margin-top: 100px;
      }
      .card{
          background: #BB002D;
          width: 320px;
          text-align: center;
          margin: 20px;
          box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.45);
      }
      .card-body{
          background: white;
      }

      .card-title{
          background: white;
      }
      
      .card-img-top{
          height: 270px;
      }
      .card-footer{
          background: #BB002D;
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

      header{
          display:flex;
          justify-content: space-between;
          align-items: center;
          padding: 20px 10%;
          background-color: #BB002D;
      }

      nav{
          background-color: #BB002D;
      }
      .logo {
          cursor: pointer;
          background-color: #BB002D;
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
          padding: 9px 25px;
          background-color: rgba(220,220,220,1);
          border: none;
          border-radius: 50px;
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
            <img src="Asset/Icon.png" width="130px"alt="" class="logo">
            <nav>
                <ul class="nav_link">
                <li><a href="list.php">Pendonor</a></li>
                <li><a href="#">Jadwal</a></li>
                </ul>
            </nav>
            <a href="Login.php" class="cta"><button>Log Out</button></a>
        </header>
        <br>
        <h2 style="text-align: center;">Ranking</h2>

        <table class="center">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aktif</th>
                <th>Skor</th>
            </tr>
            
            <?php
            $conn = mysqli_connect("db","root","manpro4521","manpro");
            if($conn-> connect_error){
                die("Connection failed:". $conn-> connect_error);
            }

            $sql = "SELECT id, nama, email, aktif from donor";
            $result = $conn-> query($sql);

            if ($result-> num_rows > 0){
                while ($row = $result-> fetch_assoc()){
                    echo "<tr><td>". $row["id"] ."</td><td>". $row["nama"] ."</td><td>". $row["email"] ."</td><td>". $row["aktif"] ."</td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "0 result";
            }

            $conn->close()
            ?>
        </table>

    </body>
</html>