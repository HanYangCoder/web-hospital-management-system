<?php
    require ("db_connection.php");

    $sqlstr = 'INSERT INTO doctorDB (firstName, lastName, department, specialty, isAvailable, contactNum) 
      VALUES (:firstName, :lastName, :department, :specialty, :isAvailable, :contactNum)';

    $saveUser = $conn->prepare($sqlstr);

    $saveUser->bindparam(':firstName', $_POST['firstName']);
    $saveUser->bindparam(':lastName', $_POST['lastName']);
    $saveUser->bindparam(':department', $_POST['department']);
    $saveUser->bindparam(':specialty', $_POST['specialty']);
    $saveUser->bindparam(':isAvailable', $_POST['isAvailable']);
    $saveUser->bindparam(':contactNum', $_POST['contactNum']);
    
    $saveUser->execute();

	echo "
    <script>
      alert ('New Doctor Added');
    </script>
  ";
  header ("Location: showAll.php");

?>