<!DOCTYPE html>
<html>
  <head>
  </head>

  <body>
    <div class="login-form">

      <form name= "sign_up" action="signupSave.php" method="POST">
        <h2>Sign Up</h2>

          <!--Username-->
          <div class="form-group">
            <input type="text" id="username" name="username" class="form-control" placeholder="Enter Username" required="required">
          </div>

          <!--first and last name insert here-->
          <div class="form-group">
            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter First Name" required="required">
          </div>
          <div class="form-group">
            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Last Name" required="required">
          </div>

          <!--Password and re-type password-->
          <div class="form-group">
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter Password" required="required">
          </div>
          <div class="form-group">
            <input type="password" id="retypepassword" name="retypepassword" class="form-control" placeholder="Re-type Password" required="required">
          </div>

          <!--email-->
          <div class="form-group">
            <input type="text" id="email" name="email" class="form-control" placeholder="Enter Email" required="required">
          </div>

          <!--Create Account-->
          <div class="form-group">
            <input type="submit" value="SIGN UP" class="btn btn-primary btn-block"/>
          </div>       
      </form>
      <p><a href="index.php">Sign in to an account instead</a></p>
    </div>
  </body>
</html>