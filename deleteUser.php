<?php
  require ('db_connection.php');
  $id = $_GET['id'];

  $deleteUserSql = $conn->prepare ("Delete from userDB where userID='$id'");
  $deleteUserSql->execute();

  echo"
    <script>
      alert ('Successful user deletion');
    </script> ";

  header ("Location: showAll.php");
?>