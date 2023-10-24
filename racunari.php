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

<section class="banner4">
    <cite class="animate__animated animate__heartBeat">"Učenje u starosti, to je pisanje po pesku, učenje u mladosti, to je klasanje u kamenu."</cite>
    <p>Arapska narodna poslovica</p>
</section>

<section class="info3">
    <address class="animate__animated animate__bounce">Trenutno pohađam visoku tehničku školu strukovnih studija u Subotici.
        U drugoj sam godini. <br>U svet informatike sam ušla <br>pre nekoliko godina kada sam završila IT akademiju, jedogodišnji kurs.
        <br>Tada sam shvatila da je informatika <br>nešto čime želim da se bavim do kraja života.</address>
    <br><br><br>

</section>

<section>
    <div class="grey1">
        <div class="grey1_1">
            <br>
            <h3>
                Web programiranje je nešto što zaista volim jer postoje neograničene mogućnosti i neverovatne stvari koje mogu da se
                naprave poznavanjem programskih jezika poput pretvaranje jednostavne statičke html i css web strane
                u moderne i dinamičke web strane. Poznavanje programskih jezika poput C,C++,Python,Java,PHP i mnoge druge
                omogućava nam da pravimo moderne i funkcionalne vebsajtove, razvijamo mobilne apliakcije, video igrice i još mnogo toga.
                Moja želja je da se fokusiram na pravljenje vebsajtova. Nakon što sam samostalno dizajnirala par vebsajtova uz pomoć html i css
                na IT akademiji, shvatila sam da želim da zađem dublje u programiranje i dodam funkcionalnost svom vebsajtu.
                Takođe sam pravila web stranice preko wordpressa. Takođ poznajem i rad u Adobe programima poput Fotošopa, Ilustratora, InDesign-a i Adobe Premiere
                video editing program. Kada završim školu volela bih da radim za neki IT kompaniju ovde ili u inostranstvu.
                Moj plan je da pravim vebsjatove po narudžbi dok studiram tako da mogu da unapredim svoje znanje, a istovremeno
                i zaradim neki novac kako bih stumulisala sebe za dalje studiranje i posao.
            </h3>
        </div>
        <br><br>
        <div class="grey1_2">
            <img src="computer1.jpg" alt="slika" class="blue_img">
        </div>
    </div>

    <div class="white1">
        <div class="white1_2">
            <p> Činjenica da su šanse za pronalazak posla nakon ove škole velike, takođe mi daje motivaciju
                da nastavim dalje da istražujem i stičem znanje u ovom oblasti svaki dan, takođe i kroz druge izvore,
                uz školu. Znam da dobar programer, uz programsko znanje, takođe mora da razvija veštinu komuniciranja
                i navike rada u timu. Prilikom izrade nekog vebsajta, mnogo pažnje obraćam na detalje, primetim svaki pixel
                koji je iskočio i volim da je sve u savršenoj harmoniji kada je u pitanju sam izgled vebsajta.
                Van škole i školskih obaveza, takođe volim da učim programiranje i od kuće, u moje slobodno vreme,
                zato što verujem da svakodnevno učenje i vežbanje je od krucijalnog značaja za razvoj programerske logike
                i proširivanja znanja. S obzirom da volim umetnost i crtanje i imam smisla za kombinovanje boja,
                verujem da bih, između drugih stvari, jednog dana mogla da pravim moderne i lepe vebsajtove.
            </p>
        </div>
        <br>
        <div class="white_1">
            <img src="computer2.jpg" alt="slika" class="white_img">
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
