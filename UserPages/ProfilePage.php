<?php
 session_start();

    include("../DB/connection.php");
    include("../DB/dbfunctions.php");
    include("../DB/functions.php");

    $username = checkLogin($conn);

    $userData = loadUserData($conn, $_SESSION['Id']);

    if(isset($_POST["saveProfile"])){
        
        $fullname = $_POST['fullname'];
        $username = $_POST['username']; 
        $email = $_POST['email']; 
        $phone = $_POST['phone']; 
        $pass = $_POST['password']; 
        $id = $_SESSION['Id'];

        try{
                $goodPass = encryptPass($pass);
                if($role == 'Admin'){
                    $roleId = 1;
                }
                else{
                    $roleId = 2;
                }
                if($pass == ""){
                    $sql = "Update users Set Fullname = '$fullname', Username = '$username', Email = '$email', Phone = '$phone' where Id = $id" ;
                }else{
                    $sql = "Update users Set Fullname = '$fullname', Username = '$username', Email = '$email', Phone = '$phone', Password = '$goodPass' where Id = $id" ;
                }
                $conn->exec($sql);
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }

        header("Location: Dashboard.php");
        die;

    }


?>

<!DOCTYPE html>
<html lang="en" lang="en">
<head>
    <title>BiblioTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/profile.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="../javascripts/main.js"></script>
</head>

<body>
   <div> 
       <!-- //to do poza fundal sub navbar -->
    <nav>
        <label class="logo">BiblioTech</label>

        <ul id="dashList">

            <li><a  href="Dashboard.php">Home</a></li>
            <li><a  href="AboutPage.php">About</a></li>
            <li><a  href="SubjectsPage.php">Subjects</a></li>
            <li><a  href="SearchPage.php">Search</a></li>
            <li><a  href="#">Contact</a></li>

            <li id="username-loggedin"><a href=<?php
            if($username == ""){
                echo '"../Startup/LoginPage.php">Login';
            }
            else{
                echo '"../UserPages/ProfilePage.php">'.$username;
            }

            ?>
            </a></li>
            <li <?php if($username == ""){
                echo ' style="display: none;"';
            } ?>><a  href="#" ><a href="../DB/logout.php">LOGOUT</a></li>
            
        </ul>

        <label id="icon" >
            <p class="dashLines" onclick="change()">&#8803;</p>
        </label>

    </nav>
    <div class="profile-section">
        <div class="area" id="profileArea">
            <header>PROFILE</header>
            <form method="post">
                <div class="contact1">
                    <input id="fullname" type="text" name="fullname"  placeholder="Full name" readonly value="<?php echo $userData[0]?>">
                    <label class="switch">
                        <input  id="check1" name="check1" type="checkbox" onclick="setReadOnlyFunc(1)">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="username" type="text" name="username" placeholder="Username" readonly value="<?php echo $userData[1]?>">
                    <label class="switch">
                        <input id="check2" name="check2" type="checkbox" onclick="setReadOnlyFunc(2)">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="email" type="email" name="email" placeholder="Email" readonly value="<?php echo $userData[3]?>">
                    <label class="switch">
                        <input  id="check3" name="check3" type="checkbox" onclick="setReadOnlyFunc(3)">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="phone" type="phone" name="phone" placeholder="Phone" readonly value="<?php echo $userData[4]?>">
                    <label class="switch">
                        <input  id="check4" name="check4" type="checkbox" onclick="setReadOnlyFunc(4)">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input id="pass" type="password" name="password" placeholder="New Pasword" readonly>
                    <label class="switch">
                        <input  id="check5" name="check5" type="checkbox" onclick="setReadOnlyFunc(5)">
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="space"></div>
                
                <div class="submit-btn">
                    <input type="submit" name='saveProfile' value="Save changes">
                </div>
            </form>
            
            
        </div>
    </div>

    <div class="dashboard-background"></div>


</body>


</html>