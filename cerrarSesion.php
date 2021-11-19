<?php
session_start();
if(!isset($_SESSION['tipoCuenta'])){
    header("Location: index.html");
}

session_destroy();
header("location: index.html")
?>