<?php
 session_start();

    include("../DB/connection.php");
    include("../DB/dbfunctions.php");
    include("../DB/functions.php");

    $username = checkLogin($conn);

    $url= $_SERVER['REQUEST_URI']; 

    $cv = preg_split("/php?/", $url);  

    $idCat = (int)substr($cv[1], 0 - strlen($cv[1]) + 1);

    
    if($idCat == 0 && !isset($_POST['filter']))
            $booksData = loadBooks($conn);
    if(!($idCat == 0) && !isset($_POST['filter'])){
        
        $booksData = loadBooksParam($conn, $idCat, 'Teo', 'Teo');
    }

    if(isset($_POST['filter'])){
        $catName = $_POST['catSelected'];
        $bookName = $_POST['bookName'];
        $authorName = $_POST['authorName'];

        if($catName == '--Subjects--'){
            if($bookName!= "" && $authorName != ""){
                $booksData = loadBooksParam($conn, 'Teo', $bookName, $authorName);
            }else{
                if($bookName!= ""){
                    $booksData = loadBooksParam($conn, 'Teo', $bookName, 'Teo');
                }
                if($authorName!= ""){
                    $booksData = loadBooksParam($conn, 'Teo', 'Teo', $authorName);
                }
            }
        }
        else{
            if( $catName == "History"){
                $idCat = 1;
            }
            if( $catName == "Fantasy"){
                $idCat = 2;
            }
            if( $catName == "Horror"){
                $idCat = 3;
            }
            if( $catName == "Biology"){
                $idCat = 4;
            }
            if( $catName == "Design"){
                $idCat = 5;
            }
            if( $catName == "Architecture"){
                $idCat = 6;
            }
            if( $catName == "Science Fiction"){
                $idCat = 7;
            }
            if( $catName == "Romance"){
                $idCat = 8;
            }
            if( $catName == "Short Stories"){
                $idCat = 9;
            }
            if($bookName== "" && $authorName == ""){
                $booksData = loadBooksParam($conn, $idCat, 'Teo', 'Teo');

            if($bookName!= "" && $authorName != ""){
                $booksData = loadBooksParam($conn, $idCat, $bookName, $authorName);
            }else{
                if($bookName!= ""){
                    $booksData = loadBooksParam($conn, $idCat, $bookName, 'Teo');
                }
                if($authorName!= ""){
                    $booksData = loadBooksParam($conn, $idCat, 'Teo', $authorName);
                }
            }
            
        }
    }
}


?>

<!DOCTYPE html>
<html lang="en" lang="en">
<head>
    <title>BiblioTech</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/search.css">
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
            <li><a class="active" href="#">Search</a></li>
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
            <header>Books</header>
            <div class="space"></div>
            <div class="subjects-table">
                <div class="subjects-table bodySubj">
                    <div class="subject-table-row">
                        <div class="subject-table-cell" >
                        <form method="post">
                            <select class="categoryListBox" name="catSelected">
                                <option value="--Subjects--" selected>--Subjects--</option>
                                <option value="History">History</option>
                                <option value="Fantasy">Fantasy</option>
                                <option value="Horror">Horror</option>
                                <option value="Biology">Biology</option>
                                <option value="Design">Design</option>
                                <option value="Architecture">Architecture</option>
                                <option value="Science Fiction">Science Fiction</option>
                                <option value="Romance">Romance</option>
                                <option value="Short Stories">Short Stories</option>
                              </select>
                        </div>
                        <div class="subject-table-cell" >
                            <div class="cred1">
                                <input type="text" name="bookName" placeholder="Book's name">
                            </div>
                        </div>
                        <div class="subject-table-cell" >
                            <div class="cred1" id="v2">
                                <input type="text" name="authorName"  placeholder="Author's name">
                            </div>
                        </div>
                        <div class="subject-table-cell" >
                            <div class="container-text2" >
                                <div class="submit-btn">
                                    
                                    <input  type="submit" name="filter" value="Filter the search">
                                   </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <div class="space"></div>
            <div class="subjects-table">
                <div class="subjects-table bodySubj">


                    <?php 
                    
                        $count = 0;
                        foreach ($booksData as $row){
                            if($count % 3 == 0){
                                echo '<div class="subject-table-row">';
                            }
                            if($username == ""){
                                echo  '<div class="subject-table-cell" >
                                <div class="book-table">
                                    <div class="book-table bodySubj">
                                        <div class="book-table-row" >
                                            <div class="book-table-cell titleBook" >'.$row['Autor'].'- '.$row['NumeCarte'].'</div>
                                        </div>
                                        <div class="book-table-row">
                                            <div class="book-table-cell">
                                                <div class="submit2-btn">
                                                    <input style="display: none;" type="submit" value="Read pdf" onclick="openPdf('.$row['IdCarte'].')">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="book-table-row">
                                            <div class="book-table-cell">
                                                <div class="submit2-btn">
                                                    <input type="submit" value="Borrow" onclick="borrowBook('.$row['IdCarte'].')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>';
                            }else{
                            echo  '<div class="subject-table-cell" >
                                <div class="book-table">
                                    <div class="book-table bodySubj">
                                        <div class="book-table-row" >
                                            <div class="book-table-cell titleBook" >'.$row['Autor'].'- '.$row['NumeCarte'].'</div>
                                        </div>
                                        <div class="book-table-row">
                                            <div class="book-table-cell">
                                                <div class="submit2-btn">
                                                    <input type="submit" value="Read pdf" onclick="openPdf('.$row['IdCarte'].')">
                                                </div>
                                            </div>
                                            </div>
                                            <div class="book-table-row">
                                            <div class="book-table-cell">
                                                <div class="submit2-btn">
                                                    <input type="submit" value="Borrow" onclick="borrowBook('.$row['IdCarte'].')">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>';
                            }

                            $count++;
                            if($count % 3 == 0){
                                echo '</div>';
                            }
                        }

                        if(!($count % 3 == 0)){
                            echo '</div>';
                        }
                    
                    ?>


                </div>

            </div>
        </div>
    </div>

    <div class="dashboard-background"></div>
</body>


</html>