<?php 

if(isset($_POST["submit"])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $password =$_POST['password'];
    $repass = $_POST['repass'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup_tour($firstname ,$lastname ,$phone,$email ,$age ,$gender ,$password,$repass)!==false) {
       header("location: ../tourists_signup.php?error=emptyinput");
       exit();
    }
    if(pwdMatch($password,$repass)!==false){
        header("location: ../tourists_signup.php?error=passwordsdontmatch");
        exit();
    }
    if(emailExists_tour($conn, $email, $phone)!==false){
        header("location: ../tourists_signup.php?error=emailalreadyinuse");
        exit();
    }
    createUser_tour($conn, $firstname ,$lastname ,$phone, $email,  $age, $gender,  $password);

}
else{
    header("location: ../tourists_signup.php");
    exit();
}