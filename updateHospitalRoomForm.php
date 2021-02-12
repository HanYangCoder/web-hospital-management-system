<?php
  require('db_connection.php');
	$id = $_GET['id'];

	$usersql = $conn->prepare ("Select * from hospitalDB where roomNum='$id'");
	$usersql->execute();
	$user = $usersql->fetch();
?>

<!DOCTYPE html>
<html>
  <head>
  <head>

  <body>

  <div>
    <form name="update" action="updateHospitalRoomSave.php" method="POST">
      <h2>Update Information</h2>

      <div class="form-group">
        <input type = "hidden" id = "roomNum" name = "roomNum" value="<?= $user['roomNum']; ?>" required/>
      </div>
      <div class="form-group">
        <input class="form-control" type = "text" id = "patientName" name = "patientName" placeholder="Enter Patient Name" value="<?= $user['username']; ?>" required/>
      </div>
      <div class="form-group">
        <input class="form-control" type = "text" id = "docInCharge" name = "docInCharge" placeholder="Enter Doctor in charge" value="<?= $user['firstName']; ?>" required/>
      </div>
      <br/>
      <input type="submit" class="btn btn-primary btn-block" value="UPDATE" id="submit" name="update" />
    </form>	
		</div>

  </body>
</html>