<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Online Hosp Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <style>
    .login-form {
      width: 500px;
      margin: 50px auto;
      font-size: 15px;
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
      background: #D50000;
    }
    </style>
  </head>

  <body>
    <div class="login-form">
      <form name="login_old_member" action="validateLogin.php" method="GET">   <!--TODO: change GET to POST later-->
        <h2 class="text-center">Welcome to the Virtual Hospital Admin</h2><br><br>
        <h5 class="text-center">Please log in below<h5>

        <div class="form-group">
          <input type="text" id = "username" name = "username" class="form-control" placeholder="Enter Username" required="true"/>
        </div>

        <div class="form-group">
          <input type="password" id = "password" name = "password" class="form-control" placeholder="Enter Password" required="true"/>
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary btn-block" value="LOG IN" id="submit" name="login_old_member"/>
        </div>
      </form>

      <p class="text-center" style="color:#D50000;"><a href="signupForm.php">Create an Account</a></p>
    </div>

  </body>
</html>