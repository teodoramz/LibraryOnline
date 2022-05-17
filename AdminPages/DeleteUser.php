<?php
 session_start();

    include("../DB/connection.php");
    include("../DB/dbfunctions.php");
    include("../DB/functions.php");
    

    $username = checkLogin2($conn);



    $url= $_SERVER['REQUEST_URI']; 

    $cv = preg_split("/php?/", $url);  

    $idUser = (int)substr($cv[1], 0 - strlen($cv[1]) + 1);

    $id = $idUser;
        
    try{
       
        $sql = "Delete from users where Id = $id" ;
        
         $conn->exec($sql);
         
    }
    catch(PDOException $e) {
        echo $e->getMessage();
    }
    
    header('Location: AdminUsersPage.php');
    die;


?>