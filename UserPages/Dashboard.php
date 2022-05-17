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

                BiblioTech își desfășoară activitatea în municipiul Craiova, important centru cultural și economic al Olteniei. Municipiul Craiova are o populație estimată la aproximativ 300.000 de locuitori. Orașul se bucură de o viață culturală intensă, susținută de numeroase instituții publice de cultură: biblioteci, teatre, muzee, filarmonică, universități, și organizații non-guvernamentale de profil. 
                <br>
                &emsp;&emsp; BiblioTech desfășoară activități culturale comune cu diferite instituții de cultură și de învățământ în virtutea unor parteneriate/protocoale de colaborare. În ultimii ani, orașul a înregistrat o creștere fără precedent a evenimentelor culturale, inclusiv cele din domeniile culturii tradiționale, istoriei și al științelor naturii. Există toate premisele ca această evoluție pozitivă să se păstreze și în anii următori. Statutul dobândit de România, ca stat membru al Uniunii Europene, a creat oportunitatea accesării fondurilor europene, inclusiv în domeniul culturii, suplimentând astfel posibilitățile de finanțare a instituțiilor și proiectelor culturale, pe baze competitive. Analiza făcută contextului actual a identificat atât oportunități, cât și posibile riscuri din mediul extern, care pot influența evoluția Bibliotecii NUME.
                Din dorinta de a promova lectura si de a ajunge la cat mai multa lume, Biblioteca vine si in spatiul online cu o numeroasa varietate de carti transpuse in format electronic si posibilitati de imprumutare carti fizice prin completarea unor simple formulare.
           
            </p>~
            
        </div>
    </div>
    <div class="about-section">
        <div class="area">
            <header>ABOUT</header>
            <p><img class="about-img" src="../Images/bibl2.jpg" alt="imagine-biblioteca"/>  &emsp;&emsp; Influența evoluția BiblioTech.

                BiblioTech este o instituție publică, cu personalitate juridică, având caracter enciclopedic, care funcționează în subordinea Consiliului Județean Dolj, fiind finanțată de la bugetul de stat, asumându-și principalele atribuții de completare, organizare, conservare și valorificare a colecțiilor, prin întocmirea și organizarea instrumentelor proprii de informare, în sensul de a pune la dispoziția utilizatorilor informațiile solicitate, fie prin împrumutul la domiciliu, fie prin consultarea documentelor la sălile de lectură. Activitățile pe care le desfășoară BiblioTech pun accentul pe educația permanentă a tinerilor utilizatori, dar și a adulților, promovarea continuă a laturii culturale, activitatea de cercetare și chiar de recreere. Fiind cea mai importantă bibliotecă publică din județul Dolj, preocupările permanente ale bibliotecii se manifestă în direcția diseminării și îmbunătățirii informațiilor și serviciilor prin intermediul cărții, în scopul atragerii către lectură a unui număr cât mai mare de utilizatori.
                
                Aproximativ 200.000 de cetățeni solicită sau frecventează anual BiblioTech pentru a împrumuta cărți, pentru a organiza sau participa la diferite acțiuni culturale și educative sau pentru a căuta on-line informații despre probleme legate de sănătate, educație, locuri de muncă, dezvoltarea afacerilor, dar și pentru comunicarea cu rudele sau prietenii. În 2018 au fost împrumutate sau consultate aproximativ 250000 de documente din colecțiile bibliotecii. 
                
                Numărul mare de cetățeni care folosesc serviciile BiblioTech este un indicator relevant al influenței și importanței de care se bucură biblioteca. Pentru activitatea desfășurată, precum și pentru proiectele implementate, BiblioTech a fost distinsă cu titlul „Biblioteca Anului” în cadrul Galelor APLER (Asociația Publicațiilor Literare și Editurilor din România), desfășurate în decembrie 2018 la București ........
                
              
        
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