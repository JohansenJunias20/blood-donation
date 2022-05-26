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

      .solution_cards_box .solution_card {
        flex: 0 50%;
        background: #fff;
        box-shadow: 0 2px 4px 0 rgba(136, 144, 195, 0.2),
          0 5px 15px 0 rgba(37, 44, 97, 0.15);
        border-radius: 15px;
        margin: 8px;
        padding: 10px 15px;
        position: relative;
        z-index: 1;
        overflow: hidden;
   
        transition: 0.7s;
      }

      .solution_cards_box .solution_card:hover {
        
        background:#BB002D;
        color: #fff;
        transform: scale(1.1);
        z-index: 9;
      }

      .solution_cards_box .solution_card:hover::before {
        background: rgb(85 108 214 / 10%);
      }

      .solution_cards_box .solution_card:hover .solu_title h3,
      .solution_cards_box .solution_card:hover .solu_description p {
        color: #fff;
      }



      .solution_cards_box .solution_card:hover .solu_description button {
        background: #fff !important;
        color: #309df0;
      }


      .solution_card .solu_title h3 {
        color: #212121;
        font-size: 1.3rem;
        margin-top: 13px;
        margin-bottom: 13px;
      }

      .solution_card .solu_description p {
        font-size: 15px;
        margin-bottom: 15px;
      }

      .solution_card .solu_description button {
        border: 0;
        border-radius: 15px;
        background: linear-gradient(
          140deg,
          #42c3ca 0%,
          #42c3ca 50%,
          #42c3cac7 75%
        ) !important;
        color: #fff;
        font-weight: 500;
        font-size: 1rem;
        padding: 5px 16px;
      }

      .our_solution_content h1 {
        text-transform: capitalize;
        margin-bottom: 1rem;
        font-size: 2.5rem;
      }
      .our_solution_content p {
      }

      .hover_color_bubble {
        position: absolute;
        background: #d10234;
        width: 100rem;
        height: 100rem;
        left: 0;
        right: 0;
        z-index: -1;
        top: 16rem;
        border-radius: 50%;
        transform: rotate(-36deg);
        left: -18rem;
        transition: 0.7s;
      }

      .solution_cards_box .solution_card:hover .hover_color_bubble {
        top: 0rem;
      }

      .solution_cards_box .solution_card .so_top_icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        background: #fff;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
      }


      /*start media query*/
      @media only screen and (min-width: 1024px) {
        .our_solution_category {
          width: 30%;
          margin: 10px;
      
        }
      }

      h2{
        text-align: center;
        color: black;
      }

      #dashboard{
        margin:25px 0px;
        padding: 10px 0px;
      }
    </style>
  </head>

  <body>
    <header>
        <img src="Asset/Icon.png" width="130px"alt="" class="logo">
        <a href="#">Home</a>
        <a href="#dashboard">Dashboard</a>
        <a href="#aboutus">About Us</a>
        <a href="#">Contact</a>
        <a href="Login.php" class="cta"><button>Log Out</button></a>
    </header>

    <div style="background-image: url('Asset/banner.jpg'); background-repeat: no-repeat; background-size:cover; background-position:center;height: 500px;"></div>    
    <section id="dashboard" style="background-image: url('Asset/indomap2.svg'); background-repeat: no-repeat; background-position:center; height: 500px;">
    <h2>Dashboard</h2>
      <section class="container">
        
        <!-- create profile -->
        <div class="our_solution_category">
          <div class="solution_cards_box">
            <div class="solution_card">
              <div class="hover_color_bubble"></div>
                <img class="so_top_icon" src="Asset/create.jpg" alt="Card image cap">
              <div class="solu_title">
                <h3>Create Profile</h3>
              </div>
              <div class="solu_description">
                <p>
                  Create New Donor Profile.
                </p>
                <button data-toggle="modal" data-target="#createModal" class="btn btn-light">Create Profile</button>
              </div>
            </div>
            </div>
          </div>
        </div>
        <!-- search -->
        <div class="our_solution_category">
          <div class="solution_cards_box">
            <div class="solution_card">
              <div class="hover_color_bubble"></div>
                <img class="so_top_icon" src="Asset/search.png" alt="Card image cap">
              <div class="solu_title">
                <h3>Search Profile</h3>
              </div>
              <div class="solu_description">
                <p>
                  Search Donor Profile.
                </p>
                <a href="search.php" class="search_btn"><button>Search</button></a>
              </div>
            </div>
            </div>
          </div>
        </div>
        <!-- ranking -->
        <div class="our_solution_category">
          <div class="solution_cards_box">
            <div class="solution_card">
              <div class="hover_color_bubble"></div>
                <img class="so_top_icon" src="Asset/ranking2.png" alt="Card image cap">
              <div class="solu_title">
                <h3>Ranking</h3>
              </div>
              <div class="solu_description">
                <p>
                  View Donor Rankings.
                </p>
                <a href="ranking.php" class="ranking_btn"><button>View Ranking</button></a>
              </div>
            </div>
            </div>
          </div>
        </div>
      </section>
    </section>
    
    <section id="aboutus">

    </section>

    <!-- Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" >Create Profile!</h3>
                </div>

            <form id="form_daftar" method="post" action="/api/create.php">
                <div class="modal-body mx-3">
                    <label>Name</label>  
                    <input name="name" id="name" class="form-control" required>  
                    </br>  

                    <label>Gender</label>  
                    <select name="gender" id="gender" class="form-control">  
                        <option value="Laki-Laki">Male</option>  
                        <option value="Perempuan">Female</option>  
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