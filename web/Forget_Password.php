<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget_Password_Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(70deg, #e6e6e6, #f7f7f7);
            color: #514B64;
        }
        hr{
            border-width: 1px;
            border-style: solid none;
            border-color: #BB002D;
        }
        .login-form {
            width: 340px;
            margin: 50px auto;
        }
        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }
        .login-form h2 {
            margin: 0 0 15px;
        }
        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }
        .btn {        
            font-size: 15px;
            font-weight: bold;
            background-color: #BB002D;
            color: #f7f7f7;
            border: none;
        }
        .btn:hover{
            background-color:#F6B3B3;
        }
    </style>
</head>

<body>
    <div class="login-form">
        <form action="/examples/actions/confirmation.php" method="post">
            <div style="width:100%; text-align:center">
                <img src="asset/Icon.png" width="200" alt="" >
                
            </div>
            <hr>
            <h2 class="text-center" style="color: black;">Reset Password</h2>       
            <div class="form-group">
                <input type="text" class="form-control" id="RegisterEmail" placeholder="Email" style="font-size: 2sp;">
            </div>
            <br>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#Forget_Password_Modal">Submit</button>
            </div>
            <div class="modal fade" id="Forget_Password_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">New Password has been send to your email</h5>
                        </div>
                        <div class="modal-body">
                            <p>Please check your email to login with new random password and change your password at profile. Thank you!</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="botomline">
                <p class="text-center"><a href="Login.php">Already have an account?</a></p>
            </div>        
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>