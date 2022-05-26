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
    <script src="js/bootstrap.bundle.min.js.download"></script>
    <script src="js/feather.min.js.download"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/livesearch.js"></script>
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

        table {
            border-collapse: collapse;
            width: 80%;
            color: black;
            font-family: monospace;
            font-size: 25px;
            text-align: center;
        }

        table,
        th,
        td {
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
          padding: 10px 10%;
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
      <a href="list.php"><img src="Asset/Icon.png" width="120px"alt="" class="logo"></a>
       
      <a href="Login.php" class="cta"><button>Log Out</button></a>
    </header>
        <br>
        <h2 style="text-align: center;">Ranking</h2>
        <div class="container">
        <div class="row">
            <div class="col-md-3">
                <section id="filters" data-auto-filter="true">
                    <h5>Filters</h5>

                    <label for="LiveSearch">Search</label>
                    <input type="text" name="LiveSearch" id="livesearch" onkeyup="LiveSearch('livesearch','tableRanking')">
                    <br>
                    <br>
                    <p id="rowCount"></p>
                    <section class="mb-4" data-filter="condition">

                        <label for="gol_darah">
                            <h6 class="font-weight-bold mb-3">Blood Type</h6>
                        </label>
                        <select name="gol_darah" id="gol_darah">
                            <option value="0" selected>None</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>

                        <br>

                        <label for="resus">
                            <h6 class="font-weight-bold mb-3">
                                <h6 class="font-weight-bold mb-3">Rhesus</h6>
                            </h6>
                        </label>
                        <select name="resus" id="resus">
                            <option value="0" selected>None</option>
                            <option value="+">+</option>
                            <option value="-">-</option>
                        </select>

                    </section>

                    <button type="submit" class="col btn btn-danger" onclick="updateFilter()">Submit</button>
                </section>
            </div>

            <div class="col-md-8">
                <table class="center" id="tableRanking">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Blood Type</th>
                            <th>Rhesus</th>
                            <th>Email</th>
                            <th>Active</th>
                            <th>Score</th>
                        </tr>
                    </thead>
                    <tbody id="rankingTable">
                    </tbody>

                </table>
            </div>


</body>

</html>