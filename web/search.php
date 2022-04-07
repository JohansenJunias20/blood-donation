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
    body{
        background-color: #F6B3B3;
        
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

        .search-container{
            display: flex;
            justify-content: center;
        }
        .kartu {
        width: 90%;
        margin: 0 auto;
        margin-top: 10px;
        margin-bottom: 10px;
        box-shadow: 0 0.25rem 0.75rem rgba(0,0,0,.03);
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
        <img src="Asset/Icon.png" width="130px"alt="" class="logo">
        <nav>
            <ul class="nav_link">
                <li><a href="#">Pendonor</a></li>
                <li><a href="#">Jadwal</a></li>
            </ul>
        </nav>
        <a href="#" class="cta"><button>Log Out</button></a>
    </header>

    <div class="search-container" style="padding:20px;">
        <form action="/action_page.php">
            <input type="text" placeholder="Masukkan Nama" name="search" style="width:600px; height: 30px; padding: 10px;">
        
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
                                                <td><h3>Profile Pendonor</h3></td>
                                            </tr>
                                            <tr>
                                                <td width="45%" valign="top" class="textt">Nama</td>
                                                <td width="2%">:</td>
                                                <td style="color: rgb(118, 157, 29); font-weight:bold">Bayu Afrizatul Rizki</td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Jenis Kelamin</td>
                                                <td>:</td>
                                                <td>Laki-Laki</td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Gol Darah</td>
                                                <td>:</td>
                                                <td>O</td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Rhesus</td>
                                                <td>:</td>
                                                <td>+</td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Email</td>
                                                <td>:</td>
                                                <td>ya@yahoo.com</td>
                                            </tr>
                                            <tr>
                                                <td class="textt">No. Handphone</td>
                                                <td>:</td>
                                                <td>312312312</td>
                                            </tr>                
                                            <tr>
                                                <td valign="top" class="textt"><button type="button" data-toggle="modal" data-target="#editModal" class="btn btn-primary">Edit Profile</button></td>                                           
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
    <div class="card kartu">
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
    </div>
    
    <!-- jika data ada -->
    <div class="card kartu">
        <div class="row">
            <div class="col-md-8 kertas-history">
                <div class="biodata">
                    <table width="100%">
                        <tbody>
                            <tr>
                                <td valign="top">
                                    <table width="100%" style="padding-left: 2px; padding-right: 13px;">
                                        <tbody>
                                            <tr>
                                                <td><h3>History</h3></td>
                                            </tr>
                                            <tr>
                                                <td class="textt">Tanggal</td>
                                            </tr>
                                            <tr>
                                                <td>27/12/2021</td>
                                            </tr>
                                            <tr>
                                                <td valign="top" class="textt"><button type="button" class="btn btn-primary">Add Transaksi</button></td>
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
    <div class="card kartu">
        <div class="row">
            <div class="col-md-8 kertas-history">
                <div class="biodata">
                    <tr>
                        <td><h3>History</h3></td>
                    </tr>
                    <p>No Result.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- modal edit profile     -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title" >Edit Profile!</h3>
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
                    <button type="submit" id="submit_daftar" name="submit_daftar" class="btn btn-success"><i class="lnr lnr-plus-circle"></i> Edit!</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>