<?php
session_start();
if(isset($_POST['logout'])){
   
    header("Location: login.php");
    session_destroy();
    unset($_SESSION);
}