<?php
require_once "./classes/DBC.php";
require_once "./classes/User.php";
session_start();

$text = $_POST['text'];

// Vložení nového příspěvku do databáze
$query = DBC::getConnection()->query("insert into threads (post_username, text) values ('" . $_SESSION["username"] . "', '" . $text . "');");

// Přesměrování na domovskou stránku nebo jinou relevantní stránku
header('Location: threads_page.php');
exit();
?>

