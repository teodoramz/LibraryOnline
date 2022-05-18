<?php

    session_start();

    include("../DB/connection.php");
    include("../DB/functions.php");
    include("../DB/aesmethods.php");

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
       $fullname = $_POST['fullname'];
       $username = $_POST['username']; 
       $email = $_POST['email']; 
       $phone = $_POST['phone']; 
       $pass = $_POST['password']; 
       $confPass = $_POST['confPass']; 

       if($pass != $confPass){
           function_alert("Passwords do not match!");
       }
       else{
            try{
           $goodPass = encryptPass($pass);
           $sql = "Insert into users (Fullname, Username, Email, Phone, RoleId, Password) values('$fullname','$username','$email','$phone', 2 ,'$goodPass')";
            
            $conn->exec($sql);

            header('Location: LoginPage.php');
            die;
            }
            catch(PDOException $e) {
                echo $e->getMessage();
              }
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
            <header>Register</header>
            <form method="post">
                <div class="cred1">
                    <input type="text" name="fullname" required placeholder="Full name">
                </div>
                <div class="space"></div>
                <div class="cred1">
                    <input type="text"  name="username" required placeholder="Username">
                </div>
                <div class="space"></div>
                <div class="cred1">
                    <input type="email"  name="email" required placeholder="Email">
                </div>
                <div class="space"></div>
                <div class="cred1">
                    <input type="phone"  name="phone" required placeholder="Phone">
                </div>
                <div class="space"></div>
                <div class="cred2">
                    <input type="password"  name="password" required placeholder="Password">
                </div>
                <div class="space"></div>
                <div class="cred2">
                    <input type="password" name="confPass" required placeholder="Confirm password">
                </div>
                <div class="space"></div>
                <div class="terms-cond">
                    <input type="checkbox" id="checkbox2" class="check-remember" required>
                    <span class="remember-text" id="remember-text2" >Accept <a class="link-term" href="TermsAndConditionsPage.php">Terms and Conditions</a></span>
                </div>
                <div class="submit-btn">
                    <input type="submit" value="Register">
                </div>
            </form >
            <div class="space"></div>
            <div class="register">
                Already have an account? <a href="LoginPage.php">Login Now</a>
            </div>
        </div>
    </div>

<script type="text/javascript" src="startup.js"></script>
</body>


</html>