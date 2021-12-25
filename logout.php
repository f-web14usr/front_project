<?php
include 'security.php';
session_start();
Authentication :: logout();
header("Location: home-controler.php");

?>