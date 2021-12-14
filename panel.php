<?php
session_start();
if (empty($_SESSION['user'])) : header('Location: logowanie.php');
endif; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona główna</title>
    <link rel="shortcut icon" href="icon.png">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/7a07e80b53.js" crossorigin="anonymous"></script>
</head>

<body>
    <!-- By Dominik Biedebach @domobch -->

    <link href="http://fonts.cdnfonts.com/css/tw-cen-mt-condensed" rel="stylesheet">

    <section class="main" color: #fff;>

        <nav class="blend">
            <a href="main.html" class="logo"><img src="logo.svg" alt=""></a>
            <ul>
                <li><a href="main.html" class="wybrany">Strona Główna</a></li>
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

        <section class="contentMain">
            <header>to jest panel :)</header>
            <button><a href="logout.php">wyloguj</a></button>


            <?php
            // połączenie z bazą danych w osobnym pliku
            require_once "db_connection.php";
            // zapytanie do bazy danych
            $result = mysqli_query($db, "SELECT * FROM wiadomosci",);

            while ($row = mysqli_fetch_array($result)) {
                echo "Imie: " . $row['nazwa'] . "<br>E-mail: " . $row['email'] . "<br>Wiadomość:  " . $row['message'];
                echo "<br><br>";
            }

            mysqli_close($con);
            ?>

        </section>


    </section>

    <footer>
        © 2018 U Pawełka
        <a href="" class="hamburger">
            <i class="fas fa-bars"></i>
        </a>
    </footer>


    <script src="script.js"></script>
</body>

</html>