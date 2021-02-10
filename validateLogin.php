<?php

  require ("db_connection.php");
  $username = $_GET['username'];
  $password = $_GET['password'];
  
  $usersql = $conn->prepare ("Select * from userDB where username = '$username' AND password = '$password'");
  $usersql->execute();

  if($user = $usersql->fetch()) {
    
    if($user['userrole'] == 'admin'){
      echo"
        <script>
          alert ('WELCOME USER');
        </script>";

      header ("Location: showAll.php");
    }

    else{
      $id = $user['userID'];
      echo"
        <script>
          alert ('WELCOME USER');
        </script>";

      header ("Location: showOnly.php");    // TODO: Change location with $id for user-level access only
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