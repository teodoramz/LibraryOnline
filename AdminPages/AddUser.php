<?php
 session_start();

    include("../DB/connection.php");
    include("../DB/dbfunctions.php");
    include("../DB/functions.php");

    $username = checkLogin2($conn);


    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fullname = $_POST['fullname'];
        $username = $_POST['username']; 
        $email = $_POST['email']; 
        $phone = $_POST['phone']; 
        $pass = $_POST['password']; 
        $role = $_POST['role']; 
 
        if($role != 'Admin' && $role != 'User'){
            function_alert("Role can be either Admin or User!");
        }
        else{
             try{
            $goodPass = encryptPass($pass);
            if($role == 'Admin'){
                $roleId = 1;
            }
            else{
                $roleId = 2;
            }
            $sql = "Insert into users (Fullname, Username, Email, Phone, RoleId, Password) values('$fullname','$username','$email','$phone', $roleId ,'$goodPass')";
             
             $conn->exec($sql);
 
             header('Location: AdminUsersPage.php');
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
    <title>BiblioTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminsubj.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="../javascripts/main.js"></script>
    <script type="text/javascript" src="../javascripts/adminpage.js"></script>
</head>

<body>
   <div> 
       <!-- //to do poza fundal sub navbar -->
    <nav>
        <label class="logo">BiblioTech</label>

        <ul id="dashList">
            <li><a href="AdminUsersPage.php">Users</a></li>
            <li><a href="#" onclick="nope()">Books</a></li>
            <li><a  href="AdminSubjectsPage.html">Subjects</a></li>
            <li><a  href="#" onclick="nope()">Borrowed/Going to be borrowed</a></li>

            <li ><a href="#" ><a href="../Startup/LoginPage.php">LOGOUT</a></li>
        </ul>

        <label id="icon" >
            <p class="dashLines" onclick="change()">&#8803;</p>
        </label>

    </nav>
    <div class="add-section">
        <div class="area" id="profileArea">
            <header>Add User</header>
            <form method="post">
                <div class="contact1">
                    <input id="fullname" name="fullname" type="text" placeholder="Full name">
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="username" name="username" type="text" placeholder="Username">
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="role" name="role" type="text" placeholder="Role(Admin/User)" >
                    
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="email" name="email" type="email" placeholder="Email" >
                    
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="phone" name="phone" type="phone" placeholder="Phone" >
                   
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="pass" name="pass" type="password" placeholder="Pasword" >  
                </div>
                <div class="space"></div>
                
                <div class="submit-btn">
                    <input type="submit" value="Add user">
                </div>
            </form>
            
            
        </div>
    </div>

    <div class="dashboard-background"></div>


</body>


</html>