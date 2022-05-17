<?php
 session_start();

    include("../DB/connection.php");
    include("../DB/dbfunctions.php");
    include("../DB/functions.php");

    $username = checkLogin2($conn);


    $rez = loadUserTable($conn);
    if(isset($_POST["addUser"])){
        addUserPage();
        die;
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

            <li ><a href="#" ><a href="../DB/logout.php">LOGOUT</a></li>
            
        </ul>

        <label id="icon" >
            <p class="dashLines" onclick="change()">&#8803;</p>
        </label>

    </nav>

    <div class="users-section">
        <div class="area">
            <header>Users</header>
            <div class="space"></div>
            <div class="space"></div>
            <div class="submit-btn">
                <form method="post">
                <input id="add-sjb" name='addUser' type="submit" value="Add User">
                </form>
            </div>
            <div class="space"></div>
            or
            <div class="space"></div>
            
            <div class="divTable Subjects-table">
                <div class="divTableHeading">
                <div class="divTableRow">
                <div class="divTableHead">ID</div>
                <div class="divTableHead">Full name</div>
                <div class="divTableHead">Username</div>
                <div class="divTableHead">Role</div>
                <div class="divTableHead">Email</div>
                <div class="divTableHead">Phone</div>
                <div class="divTableHead">Password</div>
                <div class="divTableHead ">Edit</div>
                <div class="divTableHead">Remove</div>
                </div>
                </div>

                
                <?php
                    foreach($rez as $row){
                        echo '<div class="divTableBody">
                        <div class="divTableRow">
                        <div class="divTableCell">'.$row['Id'].'</div>';
                        echo '<div class="divTableCell">'.$row['FullName'].'</div>';
                        echo '<div class="divTableCell">'.$row['Username'].'</div>';
                        echo '<div class="divTableCell">'.$row['Role'].'</div>';
                        echo '<div class="divTableCell">'.$row['Email'].'</div>';
                        echo '<div class="divTableCell">'.$row['Phone'].'</div>';
                        echo '<div class="divTableCell"> Secret </div>';
                        echo '<div class="divTableCell edit" onclick="editUsr('.$row['Id'].')">&#8593;&#8595;</div>
                        <div class="divTableCell remove" onclick="deleteUsr('.$row['Id'].')">&#215;</div>
                        </div>
                  </div>';
                    }


                ?>
               
                
                </div>
            

            
        </div>
    </div>
    <div class="dashboard-background"></div>


    </div>
    
    

</body>


</html>