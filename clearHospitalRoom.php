<?php
  require ('db_connection.php');
  $id = $_GET['id'];

  $sqlstr = "UPDATE hospitalDB SET patientName = null WHERE roomNum = '$id'";
  $updatePatientName = $conn->prepare($sqlstr);

  $updatePatientName->execute();

  $sqldoctor = "UPDATE hospitalDB SET docInCharge = null WHERE roomNum = '$id'";
  $updatePatientName = $conn->prepare($sqldoctor);

  $updatePatientName->execute();

  echo "
  <script>
      alert ('Sucessfully Updated');
  </script>
  ";
  header ("Location: showAll.php");

?>