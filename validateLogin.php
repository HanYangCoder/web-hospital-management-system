<?php

  require ("db_connection.php");
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  $usersql = $conn->prepare ("Select * from user where username = '$username' AND password = '$password'");
  $usersql->execute();

  if($user = $usersql->fetch()) {
    
    if($user['userrole'] == 'admin'){
      echo"
        <script>
          alert ('WELCOME USER');
        </script>";

      header ("Location: index.php");   //  TODO: Change location
    }

    else{
      $id = $user['userID'];
      echo"
        <script>
          alert ('WELCOME USER');
        </script>";

      header ("Location: index.php");    // TODO: Change location with $id for user-level access only
    }
  }

  else{
    echo"
      <script>
        alert ('INVALID USER');
      </script>
      ";

      echo"
      <script>
        window.location.href = 'index.php';
      </script>
      ";
  }
?>