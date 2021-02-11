<?php
  //echo"Hello World! I am $username and I showAll";
  require ('db_connection.php');

  //TODO: showUserDbSql, showDoctorDbSql, showHospitalDbSql
  $showUserDbSql = $conn->prepare ("Select * from userDB");
  $showUserDbSql->execute();
  $showUserDb = $showUserDbSql->fetchAll();

  $showHospitalDbSql = $conn->prepare ("Select * from hospitalDB");
  $showHospitalDbSql->execute();
  $showHospitalDb = $showHospitalDbSql->fetchAll();

  $showDoctorDbSql = $conn->prepare ("Select * from doctorDB");
  $showDoctorDbSql->execute();
  $showDoctorDb = $showDoctorDbSql->fetchAll();
?>

<!DOCTYPE html>
<html>

  <head>
    <style>
      table, th,td {
        border: 1px solid black;
      }
    </style>
  </head>

  <body>

    <!--userDB table-->
    <table>
      <thead>
        <tr>

          <th><p> User ID <p></th>
          <th><p> Username <p></th>
          <th><p> First name <p></th>
          <th><p> Last name <p></th>
          <th><p> Password <p></th>
          <th><p> Email <p></th>
          <th><p> User role <p></th>
        
        </tr>
      </thead>

      <?php foreach ($showUserDb as $userList): ?>

      <tbody>
        <tr>

          <td><p> <?= $userList['userID']; ?> </p></td>
          <td><p> <?= $userList['username']; ?> </p></td>
          <td><p> <?= $userList['firstName']; ?> </p></td>
          <td><p> <?= $userList['lastName']; ?> </p></td>
          <td><p> <?= $userList['password']; ?> </p></td>
          <td><p> <?= $userList['email']; ?> </p></td>
          <td><p> <?= $userList['userrole']; ?> </p></td>
          <td><a href="updateUserForm.php?id=<?= $userList['userID'] ?>">Update</a></td>
          <td><a href="deleteUser.php?id=<?= $userList['userID'] ?>">Delete</a></td>
          <td><a href="setAdminVisitor.php?id=<?= $userList['userID'] ?>">Set as Admin/Visitor</a></td>

        </tr>
      </tbody>

      <?php endforeach; ?>
    </table>

    <br>

    <!--hospitalDB table-->
    <table>
      <thead>
        <tr>

          <th><p> Room Number <p></th>
          <th><p> Patient Name <p></th>
          <th><p> Doctor in charge <p></th>
        
        </tr>
      </thead>

      <?php foreach ($showHospitalDb as $hospitalList): ?>

      <tbody>
        <tr>

          <td><p> <?= $hospitalList['roomNum']; ?> </p></td>
          <td><p> <?= $hospitalList['patientName']; ?> </p></td>
          <td><p> <?= $hospitalList['docInCharge']; ?> </p></td>
          <td><a href="updateHospitalRoomForm.php?id=<?= $hospitalList['roomNum'] ?>">Update Room</a></td>
          <td><a href="clearHospitalRoom.php?id=<?= $hospitalList['roomNum'] ?>">Clear Room Data</a></td>

        </tr>
      </tbody>

      <?php endforeach; ?>
    </table>

    <br>

    <!--doctorDB table-->
    <table>
      <thead>
        <tr>

          <th><p> Doctor ID <p></th>
          <th><p> First name <p></th>
          <th><p> Last name <p></th>
          <th><p> Department <p></th>
          <th><p> Specialty <p></th>
          <th><p> Contact number <p></th>
          <th><p> Is Available <p></th>
        
        </tr>
      </thead>

      <?php foreach ($showDoctorDb as $doctorList): ?>

      <tbody>
        <tr>

          <td><p> <?= $doctorList['doctorID']; ?> </p></td>
          <td><p> <?= $doctorList['firstName']; ?> </p></td>
          <td><p> <?= $doctorList['lastName']; ?> </p></td>
          <td><p> <?= $doctorList['department']; ?> </p></td>
          <td><p> <?= $doctorList['specialty']; ?> </p></td>
          <td><p> <?= $doctorList['contactNum']; ?> </p></td>
          <td><p> <?= $doctorList['isAvailable']; ?> </p></td>
          <td><a href="updateDoctorForm.php?id=<?= $doctorList['doctorID'] ?>">Update</a></td>
          <td><a href="deleteDoctor.php?id=<?= $doctorList['doctorID'] ?>">Delete</a></td>

        </tr>
      </tbody>

      <button type="button" onclick="createDoctorForm.php?id=<?= $userList['userID']?>">Click Me!</button>

      <?php endforeach; ?>
    </table>

  </body>
</html>