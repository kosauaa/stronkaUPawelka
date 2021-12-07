<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O salonie</title>
    <link rel="shortcut icon" href="icon.png">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7a07e80b53.js" crossorigin="anonymous"></script>
</head>

<body>


    <link href="http://fonts.cdnfonts.com/css/tw-cen-mt-condensed" rel="stylesheet">



    <section class="main" color: #fff;>

        <nav class="blend">
            <a href="main.html" class="logo"><img src="logo.svg" alt=""></a>
            <ul>
                <li><a href="main.html">Strona Główna</a></li>
                <li><a href="about.html">O salonie</a></li>
                <li><a href="pracownicy.html">Pracownicy</a></li>
                <li><a href="cennik.html">Cennik</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
                <li><a href="logowanie.php" class="">Logowanie</a></li>
            </ul>
            <a href="#" class="hamburger">
                <i class="fas fa-bars"></i>
            </a>
        </nav>
        <?php if (empty($_SESSION['user'])) : ?>
            <section class="logowanie">
                <header class="logowanie">Panel logowania</header>

                <form id="form" class="logowanie" action="login.php" method="post">
                    <input name="login" id="login" type="text" placeholder="LOGIN">
                    <input name="password" id="password" type="password" placeholder="HASŁO">
                    <!-- <textarea id="message" type="text" placeholder="WIADOMOŚĆ"></textarea> -->
                    <input id="zaloguj" type="submit" class="logowanie" value="LOGOWANIE">

                </form>

                <header class="nieudane">nie udało się zalogować :(</header>
            </section>
        <?php else : header('Location: login.php');
        endif; ?>



    </section>



    <footer>
        © 2018 U Pawełka
    </footer>


    <script src="script.js"></script>
</body>

</html>