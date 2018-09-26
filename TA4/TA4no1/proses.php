<?php
session_start();

$_SESSION['genre'] = $_POST['genre'];
$_SESSION['wisata'] = $_POST['wisata'];
header("location: output.php");
?>