<?php
if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputLogin($email, $password)!==false) {
       header("location: ../tourists_login.php?error=emptyinput");
       exit();
    }
    loginUser_tour($conn, $email, $password);
}
else{
    header("location: ../tourists_login.php");
    exit();
}