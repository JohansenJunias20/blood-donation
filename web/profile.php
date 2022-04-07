<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<style>

    * {
        box-sizing: border-box;
        padding: 0;
        margin: 0;
        background-color: #F6B3B3;
    }
    body{
        background-color: #F6B3B3;
    }
    .container{
        display: flex;
        justify-content: center;
        margin-top: 50px;
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
    .card-text{
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
        <a href="profile.php"><img src="Asset/Icon.png" width="130px"alt="" class="logo"></a>
        <nav>
            <ul class="nav_link">
                <li><a href="list.php">Pendonor</a></li>
                <li><a href="#">Jadwal</a></li>
            </ul>
        </nav>
        <a href="login.php" class="cta"><button>Log Out</button></a>
    </header>

    <section class="container">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="Asset/donor.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Profile Pendonor</h5>
              <p class="card-text">Melihat profile pendonor, Create profil pendonor, Edit profile pendonor, History pendonor, Create transaksi pendonor.</p>       
            </div>
            <div class="card-footer">  
                <a href="list.php" class="btn btn-primary">Klik Disini</a>
            </div>
          </div>
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="Asset/kalender.jpg" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">Jadwal Kegiatan Donor Darah</h5>
              <p class="card-text">Melihat jadwal kegiatan donor darah.</p>
            </div>
            <div class="card-footer">      
                <a href="#" class="btn btn-primary">Klik Disini</a>
            </div>
          </div>
    </section>

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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
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

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: red;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropdown-content {
  display: inline;
}
</style>

<body>
    <div class="topnav" id="myTopnav">
        <a href="profile.php">Create Profile Pendonor</a>
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