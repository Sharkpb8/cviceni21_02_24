<?php
require_once "./classes/User.php";
require_once "./classes/DBC.php";
session_start();
if(empty($_POST["username"]) || empty($_POST["password"])){
    header('Location: index.php');
    exit();
}

$hash = password_hash($_POST["password"],PASSWORD_DEFAULT);
$query = DBC::getConnection()->query("select username, password from uzivatel where username = '" . $_POST["username"] . "' and password = '" . $hash . "';");

if ($query->num_rows <= 0)
{
    die();
}

$username = $_POST["username"];
$_SESSION['username'] = $username;
$_SESSION["loggedin"] = true;
header('Location: data.php');
?>