<?php
    include("aesmethods.php");

    function loginUser($conn, $email, $pass){

        $sql = "Select Id, RoleId, Password, Username from users where Email = '$email' limit 1;";


    try{
            $querryRez = $conn->query($sql);

            if($querryRez->rowCount() > 0){
                
                foreach ($querryRez as $row) {
                   
                    $confPass = $row['Password'];

                    if($pass == decryptPass($confPass)){
                       
                        $rez = array(true, $row['Id'], $row['RoleId'], $row['Username']); 
                        return $rez;
                    }

                    break;
                }
            }


        }
    catch(PDOException $e) {
            echo $e->getMessage();
    }

        $rez = array(false); 
        return $rez;

    }


    function checkLogin($conn){

        if(!isset($_SESSION['Remember'])){
                if(isset($_SESSION['EXPIRES'])){
                    if ($_SESSION['EXPIRES'] < time()) {
                        session_destroy();
                        $rez = ""; 
                        return $rez;
                    }
                 }
                 else{
                    session_destroy();
                    $rez = ""; 
                    return $rez;
                 }
        }
        if(isset($_SESSION['Id'])){
            $id = $_SESSION['Id'];

            $sql = "Select Username from users where Id = '$id' limit 1;";

            try{
                $querryRez = $conn->query($sql);
    
                if($querryRez->rowCount() > 0){
                    
                    foreach ($querryRez as $row) {
                       
                        $rez = $row['Username'];
                        return $rez;
                    }
                }
    
    
            }
        catch(PDOException $e) {
                echo $e->getMessage();
        }
    
         
        }
        $rez = ""; 
        return $rez;
    }

    function checkLogin2($conn){
        if(!isset($_SESSION['Remember'])){
            if(isset($_SESSION['EXPIRES'])){
                if ($_SESSION['EXPIRES'] < time()) {
                    session_destroy();
                    header('Location: ../Startup/LoginPage.php');
                     die;
                }
             }
             else{
                session_destroy();
                header('Location: ../Startup/LoginPage.php');
                die;
             }
    }
        if(isset($_SESSION['Id'])){
            $id = $_SESSION['Id'];

            $sql = "Select Username from users where Id = '$id' and RoleId = 1 limit 1;";

            try{
                $querryRez = $conn->query($sql);
    
                if($querryRez->rowCount() > 0){
                    
                    foreach ($querryRez as $row) {
                       
                        $rez = $row['Username'];
                        return $rez;
                    }
                }
    
    
            }
        catch(PDOException $e) {
                echo $e->getMessage();
        }
    }
    else{
        header('Location: ../Startup/LoginPage.php');
        die;
    }
    
           header('Location: https://youtu.be/dQw4w9WgXcQ');
            die;
    }


    function loadUserTable($conn){

        $sql = "Select users.Id, FullName, Username, roles.Role,  Email, Phone from users inner join roles on users.RoleId = roles.IdRole order by roles.Role";


        try{
                $querryRez = $conn->query($sql);

                return $querryRez;


            }
        catch(PDOException $e) {
                echo $e->getMessage();
        }

    }


    function loadUserData($conn, $userid){

        $sql = "Select FullName, Username, roles.Role,  Email, Phone from users inner join roles on users.RoleId = roles.IdRole where users.Id = '$userid'";

        try{
                $querryRez = $conn->query($sql);

                foreach($querryRez as $row){
                    $userData = array($row['FullName'], $row['Username'], $row['Role'], $row['Email'], $row['Phone']);
                    return $userData;
                    break;
                }


        }
        catch(PDOException $e) {
                echo $e->getMessage();
        }

    }

    function loadBooks($conn){

        $sql = "Select IdCarte, NumeCarte, Autor, Path from carti  order by NumeCarte";


        try{
                $querryRez = $conn->query($sql);

                return $querryRez;


        }
        catch(PDOException $e) {
                echo $e->getMessage();
        }

    }

    function loadBook($conn, $idCarte){

        $sql = "Select IdCarte, NumeCarte, Autor, Path from carti  where IdCarte = '$idCarte'";


        try{
                $querryRez = $conn->query($sql);

                return $querryRez;


        }
        catch(PDOException $e) {
                echo $e->getMessage();
        }

    }

    function loadBooksParam($conn, $idCat, $bookName, $authName){

        $count = 0;

        if($idCat == 'Teo'){
            $count++;
        }
        if($bookName == 'Teo'){
            $count++;
        }
        if($authName == 'Teo'){
            $count++;
        }

        if($count == 2){
            if($idCat != 'Teo'){
                $sql = "Select IdCarte, NumeCarte, Autor, Path from carti where CategorieId = '$idCat' order by NumeCarte";
            }
            if($bookName != 'Teo'){
                $sql = "Select IdCarte, NumeCarte, Autor, Path from carti where NumeCarte = '$bookName' order by NumeCarte";
            }
            if($authName != 'Teo'){
                $sql = "Select IdCarte, NumeCarte, Autor, Path from carti  where Autor = '$authName' order by NumeCarte";
            }
        }
        else{
            $sql = "Select IdCarte, NumeCarte, Autor, Path from carti where";

            if($idCat != 'Teo'){
                $sql .= " IdCarte = '$idCat'";
                if($count != 2){
                    $sql .= " and ";
                }
                $count++;
            }
            if($bookName != 'Teo'){
                $sql .= " NumeCarte = '$bookName'";
                if($count != 2){
                    $sql .= " and ";
                }
                $count++;
            }
            if($authName != 'Teo'){
                $sql .= " Autor = '$authName'";
                if($count != 2){
                    $sql .= " and ";
                }
                $count++;
            }

            $sql .= "  order by NumeCarte";
        }


        try{
            $querryRez = $conn->query($sql);

            return $querryRez;


        }
        catch(PDOException $e) {
                echo $e->getMessage();
        }

    }
    

?>

