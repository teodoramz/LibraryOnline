<?php
 session_start();

    include("../DB/connection.php");
    include("../DB/dbfunctions.php");
    include("../DB/functions.php");
    

    $username = checkLogin2($conn);



    $url= $_SERVER['REQUEST_URI']; 

    $cv = preg_split("/php?/", $url);  

    $idUser = (int)substr($cv[1], 0 - strlen($cv[1]) + 1);
    $_SESSION['EditUser'] = $idUser;
        
    $userData = loadUserData($conn, $idUser);

  

    if(isset($_POST["saveDetails"])){
        
        $fullname = $_POST['fullname'];
        $username = $_POST['username']; 
        $email = $_POST['email']; 
        $phone = $_POST['phone']; 
        $pass = $_POST['password']; 
        $role = $_POST['role']; 

        $url= $_SERVER['REQUEST_URI']; 

        $cv = preg_split("/php?/", $url);  

        $idUser = (int)substr($cv[1], 0 - strlen($cv[1]) + 1);
        $id = $idUser;
        
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
            if($pass == ""){
                $sql = "Update users Set Fullname = '$fullname', Username = '$username', Email = '$email', Phone = '$phone', RoleId = '$roleId' where Id = $id" ;
            }else{
                $sql = "Update users Set Fullname = '$fullname', Username = '$username', Email = '$email', Phone = '$phone', RoleId = '$roleId' , Password = '$goodPass' where Id = $id" ;
            }
             $conn->exec($sql);
             
             }
             catch(PDOException $e) {
                 echo $e->getMessage();
               }
        }
        header('Location: AdminUsersPage.php');
        die;

    }
    else{
    
    
    

?>     
      
   


<!DOCTYPE html>
<html lang="en" lang="en">
<head>
    <title>BiblioTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/adminsubj.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
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
            <header>Edit User</header>
            <form method='POST'>
                <div class="contact1">
                    <input id="fullname" name="fullname" type="text" placeholder="Full name" value="<?php echo $userData[0]?>" readonly>
                    <label class="switch">
                        <input id="check1" name="check1" type="checkbox" onclick="setReadOnlyFunc(1)">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="username" name="username" type="text" placeholder="Username" value="<?php echo $userData[1]?>" readonly>
                    <label class="switch">
                        <input id="check2" name="check2" type="checkbox" onclick="setReadOnlyFunc(2)">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="role" name="role" type="text" placeholder="Role(Admin/User)" value="<?php echo $userData[2]?>" readonly>
                    <label class="switch">
                        <input id="check6" name="check6" type="checkbox" onclick="setReadOnlyFunc(6)">
                        <span class="slider round"></span>
                    </label>
                    
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="email" name="email" type="email" placeholder="Email" value="<?php echo $userData[3]?>" readonly>
                    <label class="switch">
                        <input id="check3" name="check3" type="checkbox" onclick="setReadOnlyFunc(3)">
                        <span class="slider round"></span>
                    </label>
                    
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="phone" name="phone" type="phone" placeholder="Phone" value="<?php echo $userData[4]?>" readonly>
                    <label class="switch">
                        <input id="check4" name="check4" type="checkbox" onclick="setReadOnlyFunc(4)">
                        <span class="slider round"></span>
                    </label>
                   
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="pass" name="password" type="password" placeholder="Pasword" readonly>  
                    <label class="switch">
                        <input id="check5" name="check5" type="checkbox" onclick="setReadOnlyFunc(5)">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="space"></div>
                
                <div class="submit-btn">
                    <input type="submit" name="saveDetails" value="Save changes">
                </div>
            </form>
            
            
        </div>
    </div>

    <div class="dashboard-background"></div>


</body>


</html>
<?php } ?>