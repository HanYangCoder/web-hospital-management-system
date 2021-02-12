<?php
  require ('db_connection.php');

  //TODO: showDoctorDbSql, showHospitalDbSql
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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
      table, th, td{
        border-collapse: collapse;
        padding: 5px;
      }

      th{
        text-align: center;
        background: #D50000;
        font-size: 17px;
        color: #ffffff;
      }

      td{
        background: #f7f7f7;
        font-size: 15px;
      }

      a{
        color: #D50000;
      }

      .center{
        margin-top: 100px;
        margin-left: auto;
        margin-right: auto;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
      }

    </style>
  </head>

  <body>

    <!--hospitalDB table-->
    <table class="center">
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

    <!--doctorDB table-->
    <table class="center">
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

    <br><br>

  </body>
</html>