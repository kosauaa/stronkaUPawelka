<?php
session_start();
if (empty($_SESSION['user'])) : header('Location: logowanie.php');
endif; ?>

<!DOCTYPE html>
<html lang="pl">

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
            <section class="informacjePanel">
                <header class="messagePanel">panel wiadomości</header>
                <header class="username">
                    <div class="username">Użytkownik:</div><?php echo $_SESSION["user"]; ?>
                </header>

                <a href="logout.php" class="logout">wyloguj</a>
            </section>

            <section class="tabelaWiadomosci">
                <!-- <table class="wiadomosci" border="1">
                    <tr class="titles">
                        <th>ID</th>
                        <th>Data</th>
                        <th>Nazwa</th>
                        <th>E-mail</th>
                        <th>Wiadomość</th>
                    </tr> -->

                <?php
                // połączenie z bazą danych w osobnym pliku
                require_once "db_connection.php";
                // zapytanie do bazy danych
                $result = mysqli_query($db, "SELECT * FROM wiadomosci",);
                $count = mysqli_num_rows($result);
                if ($count == 0) {
                ?>
                    <header class="brak">BRAK WIADOMOŚCI !</header>
                <?php
                } else { ?>
                    <section class="tabelaWiadomosci">
                        <table class="wiadomosci" border="1">
                            <!-- <tr class="titles">
                                <th>ID</th>
                                <th>Data</th>
                                <th>Nazwa</th>
                                <th>E-mail</th>
                                <th>Wiadomość</th>
                            </tr> -->
                            <?php

                            while ($row = mysqli_fetch_array($result)) {



                            ?>

                                <?php
                                // $ilosc_wierszy = mysqli_num_rows($result);
                                // // echo $ilosc_wierszy;
                                // echo $row[3];
                                // print_r($row);
                                // print_r($row["id"]);
                                // if ($ilosc_wierszy > 1) {

                                // 
                                ?>
                                <!-- <tr class="blank">
                                        <th colspan="2"></th>
                                    </tr> -->
                                <!-- <?php
                                        // }
                                        ?> -->
                                <tr class="titles">
                                    <th>ID</th>
                                    <th><?php echo $row['id']; ?></th>
                                </tr>
                                <tr class="data">
                                    <th>Data</th>
                                    <th><?php echo $row['data']; ?></th>
                                </tr>
                                <tr class="nazwa">
                                    <th>Nazwa</th>
                                    <th><?php echo $row['nazwa']; ?></th>
                                </tr>
                                <tr class="email">
                                    <th>E-mail</th>
                                    <th><?php echo $row['email']; ?></th>
                                </tr>
                                <tr class="message">
                                    <th>Wiadomość</th>
                                    <th><?php echo $row['message']; ?></th>
                                </tr>
                                <tr class="blank">
                                    <th colspan="2"></th>
                                </tr>
                            <?php
                            }
                            ?>
                        </table>
                        <a href="clean.php" class="clean">wyczyść wiadomości</a>
                    <?php

                }
                    ?>



                    </section>




                    <?php
                    mysqli_close($db);
                    ?>

            </section>


        </section>

        <footer>
            © 2021 U Pawełka
            <a href="" class="hamburger">
                <i class="fas fa-bars"></i>
            </a>
        </footer>


        <script src="script.js"></script>
</body>

</html>