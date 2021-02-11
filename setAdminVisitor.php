<?php
    require ('db_connection.php');
    $id = $_GET['id'];

    
    $usersql = $conn->prepare ("Select * from userDB where userID = '$id'");
    $usersql->execute();

    if($user = $usersql->fetch()) {

        if($user['userrole'] == 'admin'){
            
            $sqlstr = "UPDATE userDB SET userrole = 'visitor' WHERE userID = '$id'";
            $updateUser = $conn->prepare($sqlstr);

            $updateUser->execute();

            echo "
            <script>
                alert ('Sucessfully Updated');
            </script>
            ";

            header ("Location: showAll.php");
            
            //echo "Admin to visitor";
        }

        else{
            $sqlstr = "UPDATE userDB SET userrole = 'admin' WHERE userId = '$id'";
            $updateUser = $conn->prepare($sqlstr);

            $updateUser->execute();

            echo "
            <script>
                alert ('Sucessfully Updated');
            </script>
            ";

            header ("Location: showAll.php");
            
            //echo "visitor to admin";
        }
    }
?>