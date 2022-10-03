<?php
   session_start();
   require_once ('config.php');
    if(session_destroy()){
        header("location:login.php");
    }
?>