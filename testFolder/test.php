<?php
  require ('db_connection.php');

  $id = '1001';

  $showMyUserSql = $conn->prepare ("Select * from userDB where userID='$id'");
  $showMyUserSql->execute();
  $showUserName = $showMyUserSql->fetch();

  //echo"Hi there! $id";
?>

<!DOCTYPE html>
<html>
<head>
</head>

<body>
  <p>Hello there <?= $showUserName['username']; ?> </p>
</body>
</html>
