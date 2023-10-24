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

<section class="banner3">
    <cite class="animate__animated animate__heartBeat">"Umetnost nam omogućava da pronađemo i izgubimo sebe u isto vreme."</cite>
    <p>Thomas Merton</p>
</section>

<section class="info2">
    <address class="animate__animated animate__bounce">Umetnost nas čini bogatijima,<br> bez nje bismo mi, kao i društvo u globalu, <br>bili jako siromašni. <br>Bilo da ste umetnik, težite da postanete umetnik<br> ili ste jednostavno osoba <br>koja vrednuje sve oblike umetnosti,<br> znaćete da cenite sledeću listu citata.</address>
    <br><br><br>

</section>

<section>
    <div class="blue1">
        <div class="blue1_1">
            <br>
            <h3>
                Svoj talenat za crtanje otkrila sam u još u srednjoj školi kada sam, čisto iz dosade, uzela
                papir i olovku u ruke i počela da crtam portet jedne poznate ličnosti. Dok sam hvatala
                linije i konture lica kako bih nacrtala prepoznatljiv lik, za mene u tom trenutku vreme se zaustavilo.
                Shvatila sam da je neverovatan osećaj nacrtati nešto što prikazuje lik neke osobe.
                Kad god zapnem negde u životu, ja se kroz crtanje udaljim od stvarnosti, makar na nekoliko sati, nacrtam nešto što me raduje i vratim se nazad u realnost ispunjena i sve bude lakše.
                I posle toliko godina osećam istu radost kao kad sam počinjala, jer nije važno samo nešto nacrtati,
                važno je sve ono što prati taj proces: neobična mesta, situacije, ljudi i njihove reakcije.
                Zato je svako crtanje drugačije i to je verovatno razlog zašto imam osećaj da se nikada neću umoriti od toga.

            </h3>
        </div>
        <br><br>
        <div class="blue1_2">
            <img src="draw1.jpg" alt="slika" class="blue_img">
        </div>
        <div class="blue1_3">
            <h3>
                Crtanje doživljavam kao igru koja je uvek nova i u kojoj beskrajno uživam! Ideje samo naviru,
                a želja za istraživanjem novih tehnika i unapređivanjem znanja neprekidno raste.S vremena na vreme kao da me nešto zasvrbi u glavi pa ne mogu da se smirim dok to ne izbacim iz sebe. Crtanje je jedan od načina na koji smirujem taj svrab.
                Osećaj kad napraviš nešto ni iz čega, a daš svoj maksimum i zadovoljan si energijom koju si postigao i podelio sa drugima, lepši je od jutarnje kafe, nežnih trenutaka sa dragom osobom, cigarete uz zalazak sunca, od svakog putovanja…
                Taj osećaj kratko traje, kao i svako zadovoljstvo, ali dobro je što se posle nekog vremena onaj svrab ponovo javi.
            </h3>
        </div>
    </div>

    <div class="white">
        <div class="white_1">
            <img src="draw2.jpg" alt="slika" class="white_img">
        </div>
        <br>
        <div class="white_2">
            <p>Kao samouki crtač mogu vam reći da je crtanje veština koju svako može da nauči.
                Sve što vam je potrebno to je poznavanje osnovne tehnike crtanja, malo volje i motivacije i dosta vežbe.
                Svako može da nauči da crta ako mu se pokaže osnovna tehnika i da podstrek.I Vi možete da naučite da crtate i slikate jer su crtanje
                i slikanje veštine koje se mogu naučiti i koje, kao i sve druge veštine da bi se razvijale, treba samo redovno da vežbate.
                Prestanite pogrešno da verujete da je umetnost nešto što je stvoreno za odabrane, rezervisano samo za talentovane.
                Umetnost je za svakoga, a najzabavniji deo je to što i Vi možete da naučite da crtate.
            </p>
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
