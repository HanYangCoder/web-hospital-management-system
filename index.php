<!DOCTYPE html>
<html>
  <head>
    <title>Online Hosp Login</title>    
  </head>

  <body>

    <form name="login_old_member" action="validateLogin.php" method="GET">   <!--TODO: change GET to POST later-->
      <h2>Log in</h2>
      <div>
        <input type="text" id = "username" name = "username" class="form-control" placeholder="Enter Username" required="true"/>
      </div>

      <div>
        <input type="password" id = "password" name = "password" class="form-control" placeholder="Enter Password" required="true"/>
      </div>

      <div>
        <input type="submit" value="LOG IN" id="submit" name="login_old_member"/>
      </div>
    </form>


  </body>
</html>