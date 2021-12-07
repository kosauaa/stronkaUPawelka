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
            <!-- <header class="panel">Panel administratora</header> -->



            <?php

            include('db_connection.php');

            $username = $_POST['login'];
            $password = $_POST['password'];

            // echo $username;

            $username = stripcslashes($username);
            $password = stripcslashes($password);
            $username = mysqli_real_escape_string($db, $username);
            $password = mysqli_real_escape_string($db, $password);



            $sql = "SELECT * FROM uzytkownicy WHERE login = '$username' and password = '$password'";
            $result = mysqli_query($db, $sql);
            $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
            $count = mysqli_num_rows($result);





            if ($count == 1) {          //rozpoczęcie sesji
                session_start();
                echo session_id();
                // var_dump($_POST);
                $_SESSION['user'] = $username;
                header('Location: panel.php');
                echo "<header> $username udało ci się zalogować ! </header>";
            } else {
                header('Location: logowanien.php');
            }

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