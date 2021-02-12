<?php
  require ("db_connection.php");

  $sqlstr = 'UPDATE doctorDB SET firstName = :firstName, lastName = :lastName, department = :department, 
    specialty = :specialty, isAvailable = :isAvailable, contactNum = :contactNum WHERE doctorID = :doctorID';

  $updateUser = $conn->prepare($sqlstr);
  
  $updateUser->bindparam(':doctorID', $_POST['doctorID']);
  $updateUser->bindparam(':firstName', $_POST['firstName']);
  $updateUser->bindparam(':lastName', $_POST['lastName']);
  $updateUser->bindparam(':department', $_POST['department']);
  $updateUser->bindparam(':specialty', $_POST['specialty']);
  $updateUser->bindparam(':isAvailable', $_POST['isAvailable']);
  $updateUser->bindparam(':contactNum', $_POST['contactNum']);
  
  $updateUser->execute();


  echo "
    <script>
      alert ('Sucessfully Updated');
    </script>
  ";

  header ("Location: showAll.php");

?>