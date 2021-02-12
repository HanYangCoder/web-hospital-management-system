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
  <head>

  <body>

    <div class="login-form">
      <form name="update" action="updateDoctorSave.php" method="POST">
        <h2 class="text-center">Update Doctor Information</h2>

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