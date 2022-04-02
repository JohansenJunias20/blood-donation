<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login_Page</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>


<body>
    <div class="container">
        <div class="card" style="width: 50%; margin-left: auto; margin-right: auto;">
            <div class="card-body">
                <h2 class="card-title" style="font-size: 4vw; text-align: center; margin-bottom: 5vw;">Login</h2>
                <form>
                    <div class="form-group">
                        <label for="InputUsername" style="font-size: 2vw;">Username</label>
                        <input type="text" class="form-control" id="InputUsername" placeholder="Enter username" style="font-size: 2vw;">
                    </div>
                    <div class="form-group" style="margin-bottom: 3vw;">
                        <label for="exampleInputPassword1" style="font-size: 2vw;">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" style="font-size: 2vw;">
                    </div>
                    <a href="profile.php" type="submit" class="btn btn-primary" style="font-size: 2vw; width: 100%;">Login</a>
                    <small id="forgetpassword" class="form-text"><a href="Forget_Password.php" style="font-size: 1vw;">Forget Password</a></small>
                    <a href="Register.php" type="button" class="btn btn-primary" style="font-size: 2vw; margin-top: 1vw; width: 100%;">Register</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>