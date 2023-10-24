<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
</head>
<body>
<header>
    <div class="logo">
        <img src="about_me_1.png" alt="slika" class="logo1">
    </div>

    <div class="navBar">
        <nav>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="biografija.php">Biografija</a></li>
                <li><a href="knjige.php">Knjige</a></li>
                <li><a href="crtanje.php">Crtanje</a></li>
                <li><a href="racunari.php">Računari</a></li>
                <li><a href="muzika.php">Muzika</a></li>
                <li><a href="putovanja.php">Putovanja</a></li>
                <li><a href="filmovi.php">Filmovi</a></li>
            </ul>
        </nav>
    </div>
    <div class="icons">
        <a href="https://www.facebook.com/"><img src="face.png" alt="slika" class="icons1"></a>
        <a href="https://www.instagram.com/"><img src="insta.png" alt="slika" class="icons1"></a>
        <a href="https://workspace.google.com/"><img src="email.png" alt="slika" class="icons1"></a>
    </div>
</header>

<section class="banner5">
    <cite class="animate__animated animate__heartBeat">"Ja mislim da je muzuka, sama po sebi, isceljujuća. <br>Ona je eksplozivna ekspresija čovečanstva.<br> Ona je nešto čime smo svi dotaknuti. <br>Bez obzira na kulturu iz koje potičemo,<br> svi vole muziku"</cite>
    <p>Billy Joel</p>
</section>

<section class="info4">
    <address class="animate__animated animate__bounce"> Ponekad se naprasno osetimo usamljeno i potrebno nam je da to prekinemo,<br> a ne znamo kako. <br>Muzika koja govori o temama koje su nama bitne ili zanimljive u tom trenutku<br> pomaže da se ne osećamo sami, već da shvatimo da nas još neko razume i ima slična mišljenja i stavove kao mi.<br> Tada kao da ponovo postajemo deo sveta od koga smo se pomalo otuđili.</address>
    <br><br><br>

</section>

<section>
    <div class="blue2">
        <div class="blue2_1">
            <br>
            <h3>
                Što se muzike tiče, najviše volim da slušam klasičnu muziku, ali pored toga takođe volim neke pop rock hitove iz '80 i '90 i stranu muziku.
                Pored lepote koju ima svaka klasična kompozicija, takođe postoje i mnogi benefiti po ljudski organizam i psihu koje ova vrsta muzike može da doprinese.
                Neke od tih stvari su što postajemo emotivniji.Jedno istraživanje je pokazalo je da opera može da izazove promišljenost i
                empatiju kod ljudi, takođe ranija studija je otkrila da su ljudi koji su slušali klasičnu muziku spremniji da podele lične podatke o sebi u pisanoj formi.
                Meni takođe veoma pomaže da lako zaspim. Klasična muzika uglavnom ima spor tempo i umirujuća je, što je čini odličnom za pripremu mozga i tela za spavanje.
                Volim muziku koja ima pravilan ritam, niske tonove i mirne melodije.
                Još jedno od korisnih stvari koje nam donosi klasična muzika jeste da poboljšava pamćenje.
                U jednoj studiji, jedna grupa studenata je slušala jednočasovno predavanje gde se u pozadini puštala klasična muzika,
                a druga grupa slušala je predavanje bez muzike. Oni u prvoj grupi postigli su znatno bolji rezultat na kvizu od druge grupe.
                Istraživači veruju da je muzika učinila učenike prijemčivijim za informacije, omogućavajući im da ih čuvaju i prisećaju efikasnije.
            </h3>
        </div>
        <br><br>
        <div class="blue2_2">
            <img src="music2.jpg" alt="slika" class="blue_img">
        </div>
    </div>

    <div class="white1">
        <div class="white1_2">
            <p>Moji omiljeni klasičar je Betoven, a pored njega još volim da slušam i Johann Sebastian Bach, Mocarta, Edvard Grieg, Gioachino Rossini, Johann Strauss II
                ,Antonio Vivaldi, Čajkovski itd.
                Neke od najprepoznatljivije muzike  na svijetu kompozitori su napisali prije nekoliko vekova, ali njihova muzika živi i dalje. Do danas njihovu muziku nastavljaju izvoditi renomirani simfonijski orkestri širom sveta.
                Njihova muzika živi i na druge načine – uveliko se koristi u filmovima i na televiziji kao usputna muzika. Postoje milioni ljudi širom sveta koji prepoznaju neko muzičko djelo, ali nesvesni njegovog porekla.
                Teško je predvidjeti budućnost, ali možda se čini verovatno da će dugovečnost poput Beethovena i Mocarta nadmašiti veći deo današnje moderne muzike.
            </p>
        </div>
        <br>
        <div class="white_1">
            <img src="music3.jpg" alt="slika" class="white_img">
        </div>
    </div>
</section>

<footer>
    <div class="b6">
        <div class="b6-1">
            <a href="index.php">HOME</a>
            <a href="biografija.php">BIOGRAFIJA</a>
            <a href="knjige.php">KNJIGE</a>
            <a href="crtanje.php">CRTANJE</a>
            <a href="racunari.php">RAČUNARI</a>
            <a href="muzika.php">MUZIKA</a>
            <a href="putovanja.php">PUTOVANJA</a>
            <a href="filmovi.php">FILMOVI</a>
        </div>

        <div class="current_date">
            <?php
            echo "Danas je: " . date("Y/m/d") . "<br>";
            ?>
        </div>

        <div class="b6-2">
            <a href="https://www.facebook.com/"><img src="facebook.png" alt="slika"></a>
            <a href="https://www.instagram.com/"><img src="instagram.png" alt="slika"></a>
            <a href="https://account.viber.com/en/login"><img src="viber.png" alt="slika"></a>
        </div>
    </div>
</footer>
</body>
</html>
