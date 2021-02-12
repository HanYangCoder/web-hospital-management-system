<?php
  require('db_connection.php');
	$id = $_GET['id'];

	$usersql = $conn->prepare ("Select * from doctorDB where doctorID='$id'");
	$usersql->execute();
	$user = $usersql->fetch();
?>

<!DOCTYPE html>
<html>
  <head>
  <head>

  <body>

  <div>
    <form name="update" action="updateDoctorSave.php" method="POST">
      <h2>Update Information</h2>

      <div class="form-group">
        <input type = "hidden" id = "doctorID" name = "doctorID" value="<?= $user['doctorID']; ?>" required/>
      </div>
      <div class="form-group">
        <input class="form-control" type = "text" id = "firstName" name = "firstName" placeholder="Enter First Name" value="<?= $user['firstName']; ?>" required/>
      </div>
      <div class="form-group">
        <input class="form-control" type = "text" id = "lastName" name = "lastName" placeholder="Enter Last Name" value="<?= $user['lastName']; ?>" required/>
      </div>
      <div class="form-group">
        <input class="form-control" type = "text" id="department" name = "department" placeholder="Enter department" value="<?= $user['department']; ?>" required/> 
      </div>
      <div class="form-group">
        <input class="form-control" type = "text" id = "specialty" name = "specialty" placeholder="Enter specialty" value="<?= $user['specialty']; ?>" required/>
      </div>
      <div class="form-group">
        <input class="form-control" type="text" id="isAvailable" name="isAvailable" placeholder="Is available? (yes/no)" value="<?= $user['isAvailable']; ?>" required />
      </div>
      <div class="form-group">
        <input class="form-control" type = "text" id = "contactNum" name = "contactNum" placeholder="Enter contact number" value="<?= $user['contactNum']; ?>" required/>
      </div>
      <br/>
      <input type="submit" class="btn btn-primary btn-block" value="UPDATE" id="submit" name="update" />
    </form>	
		</div>

  </body>
</html>