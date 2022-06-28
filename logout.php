<?php
session_start();
unset($_SESSION['role']);
unset($_SESSION['IS_LOGIN']);
header('location:login.php');
?>