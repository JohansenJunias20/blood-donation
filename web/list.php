  <!DOCTYPE html>
  <html>
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!--Script-->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
      <a href="profile.php"><img src="Asset/Icon.png" width="130px"alt="" class="logo"></a>
        <nav>
          <ul class="nav_link">
            <li><a href="list.php">Donor</a></li>
          </ul>
        </nav>
      <a href="Login.php" class="cta"><button>Log Out</button></a>
    </header>
    <section class="container">
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="Asset/create profile.png" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Create New Profile</h5>
        </div>

        <div class="card-footer">  
          <button data-toggle="modal" data-target="#createModal" class="btn btn-light">Click Here</button>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="Asset/search profile.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Search Profile</h5>
          
        </div>
        <div class="card-footer">      
            <a href="search.php" class="btn btn-light">Click Here</a>
        </div>
      </div>
      <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="Asset/ranking.jpg" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">Ranking</h5>
        
        </div>
        <div class="card-footer">      
            <a href="ranking.php" class="btn btn-light">Click Here</a>
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
                    <label>Name</label>  
                    <input name="name" id="name" class="form-control" required>  
                    </br>  

                    <label>Sex</label>  
                    <select name="gender" id="gender" class="form-control">  
                        <option value="Male">Laki-Laki</option>  
                        <option value="Female">Perempuan</option>  
                    </select>  
                    </br>  

                    <div class='form-row'>
                        <div class='col-xs-3 form-group'>
                            <label>Blood Type</label>  
                            <input type="text" name="bloodtype" id="bloodtype" size='2' class="form-control" required>      
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
                    <input name="email" id="email" class="form-control" required>  
                    </br>

                    <label>Phone</label>  
                    <input name="phone" id="phone" class="form-control" required>  
                    </br>
              
                <div class="modal-footer">
                    <div id="keterangan"></div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="submit_daftar" name="submit_daftar" class="btn btn-danger"><i class="lnr lnr-plus-circle"></i> Create!</button>
                </div>
            </form>
        </div>
    </div>
       
  </body>
</html>