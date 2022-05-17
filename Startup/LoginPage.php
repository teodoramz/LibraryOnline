<?php

    session_start();

    include("../DB/connection.php");
    include("../DB/dbfunctions.php");
    include("../DB/functions.php");
    $ok = 0;
    if(isset($_POST["submit"])){
       $email = $_POST['email']; 
       $pass = $_POST['password']; 
       $ok = 1;
    }


 if($ok == 1){
            try{
               $rez = loginUser($conn, $email, $pass);
              if($rez[0] == true){
                 if( isset($_POST['remember'])){
                    $_SESSION['Remember'] = true;
                 }
                 
                 $_SESSION['EXPIRES'] = time() + 3600;
                 $_SESSION['Id'] = $rez[1];
                 $_SESSION['Username'] = $rez[3];
                  if($rez[2] == 2){

                      header("Location: ../UserPages/Dashboard.php");
                      $ok = 0;
                      die;
                  }
                if($rez[2] == 1){
                    header("Location: ../AdminPages/AdminUsersPage.php");
                    $ok = 0;
                    die;
                }


              }
              else{
                clearBoxes();
                $_SESSION['Error'] = "Incorrect credentials or invalid user!";
            }
            
            }
            catch(PDOException $e) {
                $ok = 0;
                echo $e->getMessage();
              }
       
}



    
?>

<!DOCTYPE html>
<html lang="en" lang="en">
<head>
    <title>LibraryName</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="startup.css">
</head>

<body>
    <div class="bg-image">
        <div class="container">
            <header>Login</header>
            <form method="post" action="<?=$_SERVER['PHP_SELF']?>" >
                <div class="cred1">
                    <input type="mail" id='box1' name="email" required placeholder="Email">
                </div>
                <div class="space"></div>
                <div class="cred2">
                    <input class="pass-key" id='box2' name="password" type="password" required placeholder="Password">
                    <span class="show">SHOW</span>
                </div>
                <div class="fgt-pass">
                    <input type="checkbox" id="checkbox" name="remember" class="check-remember">
                    <span class="remember-text" id="remember-text" >Remember me</span>
                    <a href="ForgetPassPage.html">Forget Password?</a>
                    
                </div>
                <div class="submit-btn">
                    <input type="submit" name='submit' value="Login">
                </div>
            </form>
            <div class="space"></div>
            <div class="register">
                Don't have account? <a href="RegisterPage.php">Signup Now</a>
            </div>
        </div>
    </div>



<script type="text/javascript" src="startup.js"></script>
</body>


</html>

<?php

if(isset($_SESSION['Error'])){
    $msg = $_SESSION['Error'];
    function_alert($msg);
    unset($_SESSION['Error']);
}

?>