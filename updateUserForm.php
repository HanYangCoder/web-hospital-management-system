<?php
  require('db_connection.php');
	$id = $_GET['id'];

	$usersql = $conn->prepare ("Select * from userDB where userID='$id'");
	$usersql->execute();
	$user = $usersql->fetch();
?>

<!DOCTYPE html>
<html>
  <head>
  <head>

  <body>

  <div>
    <form name="update" action="updateUserSave.php" method="POST">
      <h2>Update Information</h2>

      <div class="form-group">
        <input type = "hidden" id = "userID" name = "userID" value="<?= $user['userID']; ?>" required/>
      </div>
      <div class="form-group">
        <input class="form-control" type = "text" id = "username" name = "username" placeholder="Enter Username" value="<?= $user['username']; ?>" required/>
      </div>
      <div class="form-group">
        <input class="form-control" type = "text" id = "firstName" name = "firstName" placeholder="Enter First Name" value="<?= $user['firstName']; ?>" required/>
      </div>
      <div class="form-group">
        <input class="form-control" type = "text" id = "lastName" name = "lastName" placeholder="Enter Last Name" value="<?= $user['lastName']; ?>" required/>
      </div>
      <div class="form-group">
        <input class="form-control" type = "password" id="password" name = "password" placeholder="Enter password" value="<?= $user['password']; ?>" required/> 
      </div>
      <div class="form-group">
        <input class="form-control" type="email" id="email" name="email" placeholder="Enter E-mail" value="<?= $user['email']; ?>" required />
      </div>
      <br/>
      <input type="submit" class="btn btn-primary btn-block" value="UPDATE" id="submit" name="update" />
    </form>	
		</div>

  </body>
</html>