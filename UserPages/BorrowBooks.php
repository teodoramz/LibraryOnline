<?php
 session_start();

    include("../DB/connection.php");
    include("../DB/dbfunctions.php");
    include("../DB/functions.php");

    $username = checkLogin($conn);


    $url= $_SERVER['REQUEST_URI']; 

    $cv = preg_split("/php?/", $url);  

    $idCarte = (int)substr($cv[1], 0 - strlen($cv[1]) + 1);

    $books = loadBook($conn, $idCarte);

    foreach($books as $row){
        $book = $row['NumeCarte'];
        break;
    }

    if(isset($_POST['borrow'])){
            $idBook = $_POST['idBook'];
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];


            try{
                
                $sql = "Insert into cereriimprumut (IdCarte, NumePers, Email) values('$idBook','$fullname','$email')";
                 
                 $conn->exec($sql);
     
                 header('Location: SearchPage.php');
                 die;
                 }
                 catch(PDOException $e) {
                     echo $e->getMessage();
            }
    }

?>

<!DOCTYPE html>
<html lang="en" lang="en">
<head>
    <title>BiblioTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contact.css">
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
            <li><a class="active" href="#">Contact</a></li>

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
    <div class="contact-section">
        <div class="area" id="contactArea">
            <header>Borrow book</header>
            <div class="space"></div>
            <div class="contactText" > 
                You will be scheduled and anounced via email when you can come to borrow this book. <br>Thank you!
 
             </div>
             <div class="space"></div>
            <form method = "POST" >
                <div class="contact1">
                    <input type="text" style="display: none;" name="idBook" placeholder="Book Name" value="<?php echo $idCarte ?>" readonly>
                </div>
                <div class="contact1">
                    <input type="text" name="bookName" placeholder="Book Name" value="<?php echo $book ?>" readonly>
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input type="text" name="fullname" required placeholder="Full Name">
                </div>
                <div class="space"></div>
                <div class="contact1">
                    <input type="email" name="email" required placeholder="Email">
                </div>
                
                <div class="space"></div>
                <div class="submit-btn">
                    <input type="submit" name="borrow" value="Send request">
                </div>
            </form>
            <div class="space"></div>
            <div class="contactText">
                or <br><b>you can reach us via <br>  mail <a href="mailto:bibliotech.bname.ro">bibliotech.bname.ro</a> <br>phone +0231 312 412
                <br> or<a href="https://www.facebook.com/amz.teodor"> Facebook</a>
             </b>
 
             </div>
            
        </div>
    </div>

    <div class="dashboard-background"></div>
</body>


</html>