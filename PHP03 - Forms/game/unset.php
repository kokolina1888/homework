<?php 
session_start();
unset($_SESSION['result']);
unset($_SESSION['cnt']);
header('Location:index.php');

?>