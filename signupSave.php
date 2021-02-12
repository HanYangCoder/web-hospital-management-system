<?php
    require ("db_connection.php");

    $sqlstr = 'INSERT INTO userDB (username, firstName, lastName, password, email) 
      VALUES (:username, :firstName, :lastName, :password, :email)';

    $saveUser = $conn->prepare($sqlstr);

    $saveUser->bindparam(':username', $_POST['username']);
    $saveUser->bindparam(':firstName', $_POST['firstName']);
    $saveUser->bindparam(':lastName', $_POST['lastName']);
    $saveUser->bindparam(':password', $_POST['password']);
    $saveUser->bindparam(':email', $_POST['email']);
    
    $saveUser->execute();

	echo "
    <script>
      alert ('New User Added');
    </script>
  ";
  header ("Location: index.php");

?>