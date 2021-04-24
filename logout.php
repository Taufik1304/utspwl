<?php 
session_start();
//session_destroy();
unset($_SESSION['MEMBER']);

header('Location:http://localhost/utspwl/index.php');