<?php 

if(isset($_POST["submit"])){
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $collegename = $_POST['collegename'];
    $city = $_POST['city'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $language = $_POST['language'];
    $password =$_POST['password'];
    $repass = $_POST['repass'];

    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInputSignup($firstname ,$lastname ,$phone,$email ,$collegename,$city,$age ,$gender ,$language,$password,$repass)!==false) {
       header("location: ../guides_signup.php?error=emptyinput");
       exit();
    }
    if(pwdMatch($password,$repass)!==false){
        header("location: ../guides_signup.php?error=passwordsdontmatch");
        exit();
    }
    if(emailExists($conn, $email, $phone)!==false){
        header("location: ../guides_signup.php?error=emailalreadyinuse");
        exit();
    }
    createUser($conn, $firstname ,$lastname ,$phone, $email, $collegename, $city, $age, $gender, $language, $password);

}
else{
    header("location: ../guides_signup.php");
    exit();
}