<!DOCTYPE html>
<html>
  <head>
  </head>

  <body>
    <div class="login-form">

      <form name= "sign_up" action="createDoctorSave.php" method="POST">
        <h2>Sign Up</h2>

          <!--first and last name insert here-->
          <div class="form-group">
            <input type="text" id="firstName" name="firstName" class="form-control" placeholder="Enter First Name" required="required">
          </div>
          <div class="form-group">
            <input type="text" id="lastName" name="lastName" class="form-control" placeholder="Enter Last Name" required="required">
          </div>

          <div class="form-group">
            <input type="text" id="department" name="department" class="form-control" placeholder="Enter department" required="required">
          </div>

          <div class="form-group">
            <input type="text" id="specialty" name="specialty" class="form-control" placeholder="Enter specialty" required="required">
          </div>

          <div class="form-group">
            <input type="text" id="isAvailable" name="isAvailable" class="form-control" placeholder="Is Available? (yes/no)" required="required">
          </div>

          <div class="form-group">
            <input type="text" id="contactNum" name="contactNum" class="form-control" placeholder="Enter Contact number" required="required">
          </div>

          <div class="form-group">
            <input type="submit" value="SIGN UP" class="btn btn-primary btn-block"/>
          </div>       
      </form>
      
    </div>
  </body>
</html>