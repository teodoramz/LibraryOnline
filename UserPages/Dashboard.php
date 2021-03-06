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
    <link rel="stylesheet" href="../css/dashboard.css">
     <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="../javascripts/main.js"></script>

</head>

<body>
   <div class="test1"> 
       <!-- //to do poza fundal sub navbar -->
    <nav>
        <label class="logo">BiblioTech</label>

        <ul id="dashList">
            <li><a class="active" href="#">Home</a></li>
            <li><a href="AboutPage.php">About</a></li>
            <li><a href="SubjectsPage.php">Subjects</a></li>
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
   </div>
   <div class="test2">


    <div class="home-section">
        <div class="area" id="area-home">
            
            <header>HOME</header>
            
            <p class="welcome">&emsp;&emsp;Bine ati venit!</p>
            <br> <br> 
            
            <p><img class="home-img" src="../Images/bibl1.jpg" alt="imagine-biblioteca"/> &emsp;&emsp;Acesta este site-ul de prezentare al celei mai mari biblioteci fizice in domeniul online din Romania!

                BiblioTech ????i desf????oar?? activitatea ??n municipiul Craiova, important centru cultural ??i economic al Olteniei. Municipiul Craiova are o popula??ie estimat?? la aproximativ 300.000 de locuitori. Ora??ul se bucur?? de o via???? cultural?? intens??, sus??inut?? de numeroase institu??ii publice de cultur??: biblioteci, teatre, muzee, filarmonic??, universit????i, ??i organiza??ii non-guvernamentale de profil. 
                <br>
                &emsp;&emsp; BiblioTech desf????oar?? activit????i culturale comune cu diferite institu??ii de cultur?? ??i de ??nv??????m??nt ??n virtutea unor parteneriate/protocoale de colaborare. ??n ultimii ani, ora??ul a ??nregistrat o cre??tere f??r?? precedent a evenimentelor culturale, inclusiv cele din domeniile culturii tradi??ionale, istoriei ??i al ??tiin??elor naturii. Exist?? toate premisele ca aceast?? evolu??ie pozitiv?? s?? se p??streze ??i ??n anii urm??tori. Statutul dob??ndit de Rom??nia, ca stat membru al Uniunii Europene, a creat oportunitatea acces??rii fondurilor europene, inclusiv ??n domeniul culturii, supliment??nd astfel posibilit????ile de finan??are a institu??iilor ??i proiectelor culturale, pe baze competitive. Analiza f??cut?? contextului actual a identificat at??t oportunit????i, c??t ??i posibile riscuri din mediul extern, care pot influen??a evolu??ia Bibliotecii NUME.
                Din dorinta de a promova lectura si de a ajunge la cat mai multa lume, Biblioteca vine si in spatiul online cu o numeroasa varietate de carti transpuse in format electronic si posibilitati de imprumutare carti fizice prin completarea unor simple formulare.
           
            </p>~
            
        </div>
    </div>
    <div class="about-section">
        <div class="area">
            <header>ABOUT</header>
            <p><img class="about-img" src="../Images/bibl2.jpg" alt="imagine-biblioteca"/>  &emsp;&emsp; Influen??a evolu??ia BiblioTech.

                BiblioTech este o institu??ie public??, cu personalitate juridic??, av??nd caracter enciclopedic, care func??ioneaz?? ??n subordinea Consiliului Jude??ean Dolj, fiind finan??at?? de la bugetul de stat, asum??ndu-??i principalele atribu??ii de completare, organizare, conservare ??i valorificare a colec??iilor, prin ??ntocmirea ??i organizarea instrumentelor proprii de informare, ??n sensul de a pune la dispozi??ia utilizatorilor informa??iile solicitate, fie prin ??mprumutul la domiciliu, fie prin consultarea documentelor la s??lile de lectur??. Activit????ile pe care le desf????oar?? BiblioTech pun accentul pe educa??ia permanent?? a tinerilor utilizatori, dar ??i a adul??ilor, promovarea continu?? a laturii culturale, activitatea de cercetare ??i chiar de recreere. Fiind cea mai important?? bibliotec?? public?? din jude??ul Dolj, preocup??rile permanente ale bibliotecii se manifest?? ??n direc??ia disemin??rii ??i ??mbun??t????irii informa??iilor ??i serviciilor prin intermediul c??r??ii, ??n scopul atragerii c??tre lectur?? a unui num??r c??t mai mare de utilizatori.
                
                Aproximativ 200.000 de cet????eni solicit?? sau frecventeaz?? anual BiblioTech pentru a ??mprumuta c??r??i, pentru a organiza sau participa la diferite ac??iuni culturale ??i educative sau pentru a c??uta on-line informa??ii despre probleme legate de s??n??tate, educa??ie, locuri de munc??, dezvoltarea afacerilor, dar ??i pentru comunicarea cu rudele sau prietenii. ??n 2018 au fost ??mprumutate sau consultate aproximativ 250000 de documente din colec??iile bibliotecii. 
                
                Num??rul mare de cet????eni care folosesc serviciile BiblioTech este un indicator relevant al influen??ei ??i importan??ei de care se bucur?? biblioteca. Pentru activitatea desf????urat??, precum ??i pentru proiectele implementate, BiblioTech a fost distins?? cu titlul ???Biblioteca Anului??? ??n cadrul Galelor APLER (Asocia??ia Publica??iilor Literare ??i Editurilor din Rom??nia), desf????urate ??n decembrie 2018 la Bucure??ti ........
                
              
        
                <div class="container-text2" >
                    <div class="submit-btn">
                        <input  type="submit" value="See more" onclick="aboutPage()">
                       
                    </div>
                </div>
        </div>
    </div>
    <div id="subject" class="subjects-section">
        <div class="area" >
            <header>SUBJECTS</header>
            <div class="divTable blueTable">
                <div class="divTableBody">
                <div class="divTableRow">
                <div class="divTableCell" id="stgBtn" onclick="stgBtnExe()">&#10154;</div>
                <div class="divTableCell">
                    <div class="container-text2" >
                    <div class="subjectBtn">
                        <input id="subj-input" class="s11" type="submit" value="History" onclick="subjectsPage()">
                       
                    </div>
                </div></div>
                <div class="divTableCell" id="rightBtn" onclick="rightBtnExe()">&#10154;</div>
            </div>
            </div>
            </div>

           
            <div class="container-text2" >
                <div class="submit-btn" id="seethemBtn">
                    <input  type="submit" value="See them all" onclick="subjectsPage()">
                   
                </div>
            </div>
        </div>
    </div>

    <div class="contact-section">
        <div class="area">
            <header>CONTACT</header>
            <div class="container-contacttext" >
            You can reach us via  <br> mail <a href="mailto:bibliotech.bname.ro">bibliotech.bname.ro</a> <br>phone +0231 312 412
            <br> <a href="https://www.facebook.com/amz.teodor"> Facebook</a>
            <br> or on our location: Strada Vasile Alecsandri 91, Craiova.
                    
              <br>  <iframe class="mapFrame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d365359.8538092706!2d23.527166727276448!3d44.322821184509685!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4752d70e6d6dcd07%3A0x4650f2eadbde99f9!2sCraiova!5e0!3m2!1sro!2sro!4v1650453694316!5m2!1sro!2sro" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                <br>
                or
                <br>
                <div class="submit-btn">
                    <input  type="submit" value="Send us a direct message" onclick="contactPage()">
                   
                </div>
            </div>
        </div>
    </div>

    <div class="dashboard-background"></div>


    </div>
    
    

</body>


</html>