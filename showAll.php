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

      <?php foreach ($showHospitalDb as $HospitalList): ?>

      <tbody>
        <tr>

          <td><p> <?= $HospitalList['roomNum']; ?> </p></td>
          <td><p> <?= $HospitalList['patientName']; ?> </p></td>
          <td><p> <?= $HospitalList['docInCharge']; ?> </p></td>

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

      <?php foreach ($showDoctorDb as $DoctorList): ?>

      <tbody>
        <tr>

          <td><p> <?= $DoctorList['doctorID']; ?> </p></td>
          <td><p> <?= $DoctorList['firstName']; ?> </p></td>
          <td><p> <?= $DoctorList['lastName']; ?> </p></td>
          <td><p> <?= $DoctorList['department']; ?> </p></td>
          <td><p> <?= $DoctorList['specialty']; ?> </p></td>
          <td><p> <?= $DoctorList['contactNum']; ?> </p></td>
          <td><p> <?= $DoctorList['isAvailable']; ?> </p></td>

        </tr>
      </tbody>

      <?php endforeach; ?>
    </table>

  </body>
</html>