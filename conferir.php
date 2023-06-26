<?php
  session_start(); 
   if(!isset($_SESSION['login'])) Header("Location: login.php");
   else Header("Location: telamenu.php");
?> 