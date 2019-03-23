<?php 
require 'connect.php';
session_start(); 
session_unset();
header("Location: /bank-app/controller/logout.php");
?>