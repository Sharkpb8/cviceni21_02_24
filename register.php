<?php
require_once "./classes/User.php";
require_once "./classes/DBC.php";
session_start();
if(empty($_POST["username"]) || empty($_POST["password"])){
    header('Location: index.php');
    exit();
}


$query = DBC::getConnection()->query("insert into uzivatel (username, password) values ('" . $_POST["username"] . "', '" . $_POST["password"] . "');");

$username = $_POST["username"];
$_SESSION['username'] = $username;
$_SESSION["loggedin"] = true;
header('Location: data.php');
?>