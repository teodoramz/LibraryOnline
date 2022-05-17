<?php
 session_start();

    include("../DB/connection.php");
    include("../DB/dbfunctions.php");
    include("../DB/functions.php");

    $username = checkLogin($conn);


?>


<!DOCTYPE html>
<html lang="en" lang="en">
<head>
    <title>BiblioTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/subjects.css">
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
            <li><a class="active" href="#">Subjects</a></li>
            <li><a  href="SearchPage.php">Search</a></li>
            <li><a  href="ContactPage.php">Contact</a></li>

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
    <div class="subjects-section">
        <div class="area">
            <header>Subjects</header>
            <div class="space"></div>
            <div class="space"></div>
            <div class="subjects-table">
                <div class="subjects-table bodySubj">
                    <div class="subject-table-row">
                        <div class="subject-table-cell" >
                             
                             <div class="subjectBtn">
                                <input id="s1" type="submit" value="History" onclick="goBooks(1)" >
                             </div>
                        </div>
                        <div class="subject-table-cell"><div class="container-text2" >
                            <div class="subjectBtn">
                                <input id="s2" type="submit" value="Fantasy" onclick="goBooks(2)">
                               
                            </div>
                        </div></div>
                        <div class="subject-table-cell"><div class="container-text2" >
                            <div class="subjectBtn">
                                <input id="s3" type="submit" value="Horror" onclick="goBooks(3)">
                               
                            </div>
                        </div></div>
                    </div>
                    <div class="subject-table-row">
                        <div class="subject-table-cell"><div class="subjectBtn">
                            <input id="s4" type="submit" value="Biology" onclick="goBooks(4)">
                         </div></div>
                        <div class="subject-table-cell"><div class="subjectBtn">
                            <input id="s5"type="submit" value="Design" onclick="goBooks(5)">
                         </div></div>
                        <div class="subject-table-cell"><div class="subjectBtn">
                            <input id="s6" type="submit" value="Architecture" onclick="goBooks(6)">
                         </div></div>
                    </div>
                    <div class="subject-table-row">
                        <div class="subject-table-cell"><div class="subjectBtn">
                            <input id="s7" type="submit" value="Science Fiction" onclick="goBooks(7)">
                         </div></div>
                        <div class="subject-table-cell"><div class="subjectBtn">
                            <input id="s8" type="submit" value="Romance" onclick="goBooks(8)">
                         </div></div>
                        <div class="subject-table-cell"><div class="subjectBtn">
                            <input id="s9" type="submit" value="Short Stories" onclick="goBooks(9)">
                         </div></div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div class="dashboard-background"></div>
</body>


</html>