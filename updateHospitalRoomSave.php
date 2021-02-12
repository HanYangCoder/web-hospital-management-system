<?php
  require ("db_connection.php");

  $sqlstr = 'UPDATE hospitalDB SET patientName = :patientName, docInCharge = :docInCharge WHERE roomNum = :roomNum';

  $updateUser = $conn->prepare($sqlstr);
  
  $updateUser->bindparam(':roomNum', $_POST['roomNum']);
  $updateUser->bindparam(':patientName', $_POST['patientName']);
  $updateUser->bindparam(':docInCharge', $_POST['docInCharge']);
  
  $updateUser->execute();


  echo "
    <script>
      alert ('Sucessfully Updated');
    </script>
  ";

  header ("Location: showAll.php");

?>