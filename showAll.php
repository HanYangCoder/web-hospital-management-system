<?php
  //echo"Hello World! I am $username and I showAll";
  require  ('db_connnection.php');

  //TODO: showUserDbSql, showDoctorDbSql, showHospitalDbSql
  $showUserDbSql = $conn->prepare ("Select * from userDB");
  $showUserDbSql->execute();
  $showUserDb = $showUserDbSql->fetchAll();
?>

<!DOCTYPE html>
<html>

  <head>
    
  </head>

  <body>

    <table>
      <thead>
        <tr>

          <th><p> User ID <p><th>
          <th><p> Username <p><th>
          <th><p> First name <p><th>
          <th><p> Last name <p><th>
          <th><p> Password <p><th>
          <th><p> Email <p><th>
          <th><p> User role <p><th>
        
        </tr>
      </thead>

      <?php foreach ($showUserDb as $UserList): ?>

      <tbody>
        <tr>

          <td><p> <?= $UserList['userID']; ?> </p></td>
          <td><p> <?= $UserList['username']; ?> </p></td>
          <td><p> <?= $UserList['firstName']; ?> </p></td>
          <td><p> <?= $UserList['lastName']; ?> </p></td>
          <td><p> <?= $UserList['password']; ?> </p></td>
          <td><p> <?= $UserList['email']; ?> </p></td>
          <td><p> <?= $UserList['userrole']; ?> </p></td>

        </tr>
      </tbody>

      <?php endforeach; ?>
    </table>

  </body>
</html>