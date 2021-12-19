<?php
session_start();
if (empty($_SESSION['user'])) : header('Location: logowanie.php');
endif;
require_once "db_connection.php";

$sql = "DELETE FROM wiadomosci";

if ($db->query($sql) === TRUE) {
    header('Location: logowanie.php');
} else {
    echo "Error deleting record: " . $db->error;
}

$db->close();
