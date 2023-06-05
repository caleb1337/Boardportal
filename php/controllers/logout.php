<?php
    session_start();
   session_unset();
   unset($_COOKIE['PHPSESSID']);
   header('Location:'.'/boardportal');
   exit;
    
?>