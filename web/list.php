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
    <section class="container">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="Asset/create profile.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Create new profile</h5>
        </div>

        <div class="card-footer">  
          <a data-toggle="modal" data-target="#createModal" class="btn btn-primary">Klik Disini</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="Asset/search profile.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Search Profile</h5>
          
        </div>
        <div class="card-footer">      
            <a href="search.php" class="btn btn-primary">Klik Disini</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="Asset/ranking.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Ranking</h5>
        
        </div>
        <div class="card-footer">      
            <a href="#" class="btn btn-primary">Klik Disini</a>
        </div>
      </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" >Create Profile!</h3>
                </div>

            <form id="form_daftar" method="post">
                <div class="modal-body mx-3">
                    <label>Nama</label>  
                    <input name="name" id="name" class="form-control">  
                    </br>  

                    <label>Jenis Kelamin</label>  
                    <select name="gender" id="gender" class="form-control">  
                        <option value="Male">Laki-Laki</option>  
                        <option value="Female">Perempuan</option>  
                    </select>  
                    </br>  

                    <div class='form-row'>
                        <div class='col-xs-4 form-group'>
                            <label>Gol. Darah</label>  
                            <input type="text" name="bloodtype" id="bloodtype" size='2' class="form-control">      
                        </div>
                        <div class='col-xs-4 form-group '>
                            <label class='control-label'>Rhesus</label>
                            <select name="rhesus" id="rhesus"  class="form-control">  
                                <option value="+">+</option>  
                                <option value="-">-</option>  
                            </select>  
                        </div>
                    </div>
            
                    <label>Email</label>  
                    <input name="email" id="email" class="form-control">  
                    </br>

                    <label>No.Telp</label>  
                    <input name="phone" id="phone" class="form-control">  
                    </br>
              
                <div class="modal-footer">
                    <div id="keterangan"></div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submit_daftar" name="submit_daftar" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Create!</button>
                </div>
            </form>
        </div>
    </div>
  </body>
</html>

<!-- <!doctype html>
<html lang="en">

<head>
    <title>Document</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<style>
    body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #2C2E43;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
  margin-right: 20px;
}

.topnav a:hover {
  background-color: #FF0075;
  color: black;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 1000px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 1000px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>

<body>
    <div class="topnav" id="myTopnav">
      <a class="nav-item nav-link active" href="profile.php" >Create Profile Pendonor <span class="sr-only">(current)</span></a>
        <a href="list.php">List Ranking Pendonor</a>
        <a href="transaksi.php">Create Transaksi Donor</a>
        <a href="history.php">History Transaksi Donor</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()"> <i class="fa fa-bars"></i>
        </a>
    </div>

    <script>
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
    </script>
</body>

</html> -->