<?php
  require ("db_connection.php");

  $sqlstr = 'UPDATE userDB SET username = :username, firstName = :firstName, lastName = :lastName,
    password = :password, email = :email WHERE userID = :userID';

  $updateUser = $conn->prepare($sqlstr);
  
  $updateUser->bindparam(':userID', $_POST['userID']);
  $updateUser->bindparam(':username', $_POST['username']);
  $updateUser->bindparam(':firstName', $_POST['firstName']);
  $updateUser->bindparam(':lastName', $_POST['lastName']);
  $updateUser->bindparam(':password', $_POST['password']);
  $updateUser->bindparam(':email', $_POST['email']);
  
  $updateUser->execute();


  echo "
    <script>
      alert ('Sucessfully Updated');
    </script>
  ";

  header ("Location: showAll.php");

?>