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
    <link rel="stylesheet" href="../css/about.css">
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
            <li><a class="active" href="#">About</a></li>
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
    <div class="about-section" id="aboutSection">
        <div class="area" id="about-area">
            <header>ABOUT</header>
            <p>
                <img class="about1-img" src="../Images/about1.jpg" alt="imagine-biblioteca"/>&emsp;&emsp;BiblioTech își desfășoară activitatea în municipiul Craiova, important centru cultural și economic al Olteniei. Municipiul Craiova are o populație estimată la aproximativ 300.000 de locuitori. Orașul se bucură de o viață culturală intensă, susținută de numeroase instituții publice de cultură – bibliotecă, teatre, muzee, filarmonică, universități, și organizații non-guvernamentale de profil. Biblioteca județeană desfășoară activități culturale comune cu diferite instituții de cultură și de învățământ în virtutea unor parteneriate/protocoale de colaborare. În ultimii ani, orașul a înregistrat o creștere fără precedent a evenimentelor culturale, inclusiv cele din domeniile culturii tradiționale, istoriei și al științelor naturii. Există toate premisele ca această evoluție pozitivă să se păstreze și în anii următori. Statutul dobândit de România, ca stat membru al Uniunii Europene, a creat oportunitatea accesării fondurilor europene, inclusiv în domeniul culturii, suplimentând astfel posibilitățile de finanțare a instituțiilor și proiectelor culturale, pe baze competitive. Analiza făcută contextului actual a identificat atât oportunități, cât și posibile riscuri din mediul extern, care pot influența evoluția BiblioTech.

                BiblioTech este o instituție publică, cu personalitate juridică, având caracter enciclopedic, care funcționează în subordinea Consiliului Județean Dolj, fiind finanțată de la bugetul de stat, asumându-și principalele atribuții de completare, organizare, conservare și valorificare a colecțiilor, prin întocmirea și organizarea instrumentelor proprii de informare, în sensul de a pune la dispoziția utilizatorilor informațiile solicitate, fie prin împrumutul la domiciliu, fie prin consultarea documentelor la sălile de lectură. Activitățile pe care le desfășoară BiblioTech pun accentul pe educația permanentă a tinerilor utilizatori, dar și a adulților, promovarea continuă a laturii culturale, activitatea de cercetare și chiar de recreere. Fiind cea mai importantă bibliotecă publică din județul Dolj, preocupările permanente ale bibliotecii se manifestă în direcția diseminării și îmbunătățirii informațiilor și serviciilor prin intermediul cărții, în scopul atragerii către lectură a unui număr cât mai mare de utilizatori.
                <br>
                &emsp;&emsp; Aproximativ 200.000 de cetățeni solicită sau frecventează anual BiblioTech pentru a împrumuta cărți, pentru a organiza sau participa la diferite acțiuni culturale și educative sau pentru a căuta on-line informații despre probleme legate de sănătate, educație, locuri de muncă, dezvoltarea afacerilor, dar și pentru comunicarea cu rudele sau prietenii. În 2018 au fost împrumutate sau consultate aproximativ 250000 de documente din colecțiile bibliotecii. 
                
                Numărul mare de cetățeni care folosesc serviciile BiblioTech este un indicator relevant al influenței și importanței de care se bucură biblioteca. Pentru activitatea desfășurată, precum și pentru proiectele implementate, BiblioTech a fost distinsă cu titlul „Biblioteca Anului” în cadrul Galelor APLER (Asociația Publicațiilor Literare și Editurilor din România), desfășurate în decembrie 2018 la București.
                <br><img class="about2-img" src="../Images/about2.jpg" alt="imagine-biblioteca"/>
                &emsp;&emsp;Istoria BiblioTech a început cu mai bine de un veac în urmă. Inaugurarea Fundației Alexandru și Aristia Aman, în 21 decembrie 1908, a reprezentat prima inițiativă privată din Craiova în sensul înființării unui centru cultural complex destinat publicului. Momentul festiv s-a desfășurat în prezența distinsului cărturar Spiru Haret, ministrul Cultelor și Instrucțiunii Publice la momentul respectiv. 
                
                Parte integrantă a fundației inițiale, BiblioTech și-a desfășurat neîntrerupt activitatea de la înființare și până în prezent. În momentul de față, fondurile de cărți, reviste și ziare ale bibliotecii numără peste 628088 unități, dintre care 535 cărți vechi românești și străine rare din secolele XVI – XIX, precum și 5 manuscrise valoroase. Primele biblioteci iau naștere în antichitate, în Mesopotamia, unde tăblițe de lut erau păstrate în temple sau în palatele conducătorilor.[1][8] În această epocă existau biblioteci, dar ele se confundau cu arhivele.[9][10] Un templu din orașul Nippur avea în mileniul III î.e.n. mai multe încăperi unde se păstra o colecție de tăblițe de lut.[11] O colecție similară din mileniul II î.e.n. a fost descoperită în Amarna.[11][12] Assurbanipal (668-627 î.e.n.), ultimul mare rege asirian a organizat o bibliotecă alcătuită dintr-o colecție de mii de tăblițe de lut și fragmente care conțineau texte de toate tipurile din secolul al VII-lea î.e.n.[11]

                Majoritatea tăblițelor (aproximativ 6.000) conțineau texte referitoare la legislație, corespondență diplomatică, declarații aristocratice și aspecte financiare.[13] Textele rămase conțineau preziceri, prevestiri, incantații și imnuri către diverși zei, în timp ce altele se refereau la medicină, astronomie și literatură.[14] Printre obiectele deținute se aflau poemele epice „Epopeea lui Ghilgameș”, povestea creației „Enuma Eliș” și „Tăblița lui Venus a lui Ammisaduqa”, care conține înregistrarea observațiilor astronomice ale planetei Venus.[15][14] Tăblițele au fost adesea organizate în funcție de formă și conținutul textelor. De exemplu, tăblițele cu patru laturi conțineau informații despre finanțe și tăblițele rotunde conțineau informații despre agricultură.[16] În Grecia antică primele biblioteci importante apar în secolul al IV-lea î.e.n. grație școlilor filosofice.[11] Textele din aceste biblioteci erau scise pe materiale ca papirusul, utilizat de egipteni pentru scriere din anul 3000 î.e.n. și până în secolul al IX-lea e.n. sau pergamentul.[11] Cea mai cunoscută dintre aceste biblioteci a fost cea a Școlii peripatetice, întemeiată de către Aristotel.[11] Biblioteca lui Aristotel, mai ales prin intermediul copiilor, a constituit baza pe care a fost ridicată Biblioteca din Alexandria.[11] Plănuită de Ptolemeu I Soter, rege al Egiptului și fondată de Ptolemeu al II-lea Philadelphus, în secolul al III-lea î.e.n., aceasta avea în perioada sa de glorie între 400.000 și 700.000 de suluri de papirus.[11][17][18] Cunoscuți erudiți ai antichității ca dramaturgul Aristofan, polimatul Eratostene, criticul literar Aristarh din Samotrace sau poetul Callimah au îndrumat destinele bibliotecii.[11] O altă bibliotecă importantă în lumea antică a fost cea din Pergam, Asia Mică.[11] Fondată în timpul domniei lui Attalus I Soter și a lui Eumenes al II-lea Soter, între 200-159 î.e.n., avea conform filosofului Plutarh aproximativ 200.000 de pergamente.[11][19] Pergamul a fost un centru al producției de pergament iar acest suport de scris se numește, după numele orașului, pergament (în greacă "pergaminus sau pergamena"; în latină "membrana pergamena sau charta pergamena").[20] Legenda potrivit căruia pergamentul a fost inventat în Pergam odată cu sistarea exportului de papirus de către dinastia Ptolemeilor, în mare parte datorită rezervei limitate și a conflictelor economice, nu este adevărată, deoarece acest suport de scris era folosit în Asia Mică anterior acestor evenimente.[21][22] În Roma antică existau biblioteci private, printre care cea a lui Cicero ori a lui Lucius Licinius Lucullus.[11][23] Iulius Cezar a planificat construirea unei biblioteci publice dar acest lucru nu s-a mai realizat din cauza morții sale, în 44 î.e.n. La nici cinci ani după moartea lui Iulius Cezar o bibliotecă publică a fost ridicată grație eforturilor lui Asinius Pollio, fapt descris în opera lui Plinius cel Bătrân „Istoria Naturală” (în latină "Naturalis Historiae").[24][11] Împărați romani, precum Augustus (Octavianus Augustus ori Octavian), Tiberius sau Vespasian au construit, de asemenea, biblioteci.[25] Bibliotecile construite de Augustus, Bibliotheca Porticus Octaviae și Bibliotheca Apollinis Palatini, erau administrate de către un director general (în latină "Procurator Bibliothecarum Augusti") care avea în subordine două oficii, unul care se ocupa de cărțile în limba latină și unul care se ocupa de cărțile în limba greacă.[26][27]
                 <br> <img class="about2-img" src="../Images/about3.png" alt="imagine-biblioteca"/>Biblioteca fondată de Traian în anul 100 e.n., Bibliotheca Ulpia, a avut și rolul de Arhivă Publică a Romei.[11][28] Cărțile în bibliotecile romane erau păstrate în dulapuri de lemn sau cabinete (în latină "armaria") așezate de-a lungul pereților, după cum s-a descoperit la Herculaneum în 1754.[29] În Grecia și la Roma cărțile erau copiate de scribi și sclavi, oameni de carte, plasați în fiecare oraș într-un loc fix, astfel explicându-se existența numeroaselor exemplare identice ale acelorași opere. La Constantinopol în anul 354 e.n. Constantin cel Mare a fondat o bibliotecă ce se va dovedi cea mai viabilă până la căderea orașului în 1453.[9][11] Treptat, colecția de cărți a bibliotecii imperiale precum și a altor biblioteci din Bizanț a crescut necontenit și a fost consultată de cărturarii vremii, dintre care s-a remarcat împăratul Constantin al VII-lea Porfirogenet.[9] O activitate deosebită a avut Fotie (Photius), Patriarh al Constantinopolului și profesor la Universitatea din Constantinopol, bibliofil pasionat, posedând o bibliotecă remarcabilă, unul dintre cei mai erudiți oameni ai secolului al IX-lea.[9] A lăsat numeroase scrieri, dintre care un loc deosebit îl ocupă una cu caracter enciclopedic, „Myrabilion” (în greacă "Μυριόβιβλος"), cunoscută și ca „Biblioteca” (Biblioteca lui Photias, în greacă "Βιβλιοθήκη"), unde au fost rezumate 279 de opere, cu adnotări, date bibliografice și texte critice.[30] Datoritî bibibliotecilor din Bizanț operele clasice grecești s-au păstrat și au putut fi cunoscute de vestul Europei. Acest lucru combinat cu migrarea erudițor greci după căderea Constantinopolului și apetitul italienilor pentru clasicismul latin au contribuit la începutul Renașterii.[11] În secolul al X-lea a fost fondată la Bagdad o bibliotecă cuprinzând 12.000 volume, opere inedite, traduceri din greacă, sanscrită, chineză. Celebră era și biblioteca din Cairo, care în secolul al X-lea poseda un fond de 1.600.000 de volume.[9] De asemenea, în timpul prezenței musulmane în Peninsula Iberică exista un sistem de biblioteci, cele mai importante fiind cele din Córdoba, Toledo și Granada, prin intermediul cărora se întrețineau schimburile culturale cu lumea creștină a apusului Europei.[11] Un nou suport de scris, hârtia, începe să fie folosit, prima oară de către chinezi în jurul anului 105 e.n.[31][9] În secolul al VIII-lea a fost preluată de arabi iar prin intermediul lor ajunge în Peninsula Iberică și de acolo în întreaga Europă.[31][9] Prima fabrică de hârtie din Europa a fost deschisă în 1150 la Játiva, Spania iar mai târziu au apărut fabrici și în Franța, Sfântul Imperiu Roman (Sfântul Imperiu Roman de Națiune Germană) și Anglia.[32][31]


     
               <br> <br>Arhiva <br>
                 <div class="divTable blueTable">
                    <div class="divTableBody">
                    <div class="divTableRow">
                    <div class="divTableCell it1"></div><div class="divTableCell it2"></div><div class="divTableCell it3"></div></div>
                    <div class="divTableRow">
                    <div class="divTableCell it4"></div><div class="divTableCell it5"></div><div class="divTableCell it6"></div></div>
                    <div class="divTableRow">
                    <div class="divTableCell it7"></div><div class="divTableCell it8"></div><div class="divTableCell it9"></div></div>
                    </div>
                 </div>

        </div>
    </div>

    <div class="dashboard-background"></div>
</body>


</html>