<?php 

function emptyInputSignup($firstname ,$lastname ,$phone,$email ,$collegename,$city,$age ,$gender ,$language,$password,$repass){
    $result = true;
    if(empty($firstname)||empty($lastname)||empty($phone)||empty($email)||empty($collegename)||empty($city)||empty($age)||empty($gender)||empty($language)||empty($password)||empty($repass)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function pwdMatch($password,$repass){
    $result = true;
    if($password!==$repass){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function emailExists($conn, $email, $phone){
    $sql = "SELECT * FROM student WHERE email = ? or phone = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       header("location: ../guides_signup.php?error=stmtfailed");
    }
    mysqli_stmt_bind_param($stmt, "ss", $email, $phone);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $firstname ,$lastname ,$phone,$email ,$collegename,$city,$age ,$gender ,$language,$password){
    $sql = "INSERT INTO student (`firstname`, `lastname`, `phone`, `email`, `collegename`, `city`, `age`, `gender`, `language`, `password`) VALUES(?,?,?,?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       header("location: ../guides_signup.php?error=stmtfailed");
    }
    $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "ssssssssss", $firstname ,$lastname ,$phone,$email ,$collegename,$city,$age ,$gender ,$language,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../guides_login.php?error=none");
    exit();
}

function emptyInputLogin($email, $password){
    $result = true;
    if(empty($email)||empty($password)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}

function loginUser($conn, $email, $password){
    $uidExists =  emailExists($conn, $email,$email);

    if ($uidExists===false) {
        header("location: ../guides_login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($password, $pwdHashed);

    if($checkPwd===false){
         header("location: ../guides_login.php?error=wronglogin");
         exit();
    }
    else if($checkPwd===true){
        session_start();
        $_SESSION["id"] = $uidExists["id"];
        $_SESSION["useruemail"] = $uidExists["email"]; 
        header("location: ../guides.php");
        exit();
    }
}

function emptyInputSignup_tour($firstname ,$lastname ,$phone,$email ,$age ,$gender ,$password,$repass){
    $result = true;
    if(empty($firstname)||empty($lastname)||empty($phone)||empty($email)||empty($age)||empty($gender)||empty($password)||empty($repass)){
        $result = true;
    }
    else{
        $result = false;
    }
    return $result;
}
function emailExists_tour($conn, $email, $phone){
     $sql = "SELECT * FROM tourists WHERE email = ? or phone = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       header("location: ../tourists_signup.php?error=stmtfailed");
    }
    mysqli_stmt_bind_param($stmt, "ss", $email, $phone);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else{
        $result = false;
        return $result;
    }
    mysqli_stmt_close($stmt);
}
function createUser_tour($conn, $firstname ,$lastname ,$phone, $email,  $age, $gender,  $password){
    $sql = "INSERT INTO tourists (`firstname`, `lastname`, `phone`, `email`,  `age`, `gender`, `password`) VALUES(?,?,?,?,?,?,?)";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
       header("location: ../tourists_signup.php?error=stmtfailed");
    }
    $hashedPwd = password_hash($password,PASSWORD_DEFAULT);
    mysqli_stmt_bind_param($stmt, "sssssss", $firstname ,$lastname ,$phone,$email ,$age ,$gender,$hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../tourists_login.php?error=none");
    exit();
}
function loginUser_tour($conn, $email, $password){
    $uidExists =  emailExists_tour($conn, $email,$email);

    if ($uidExists===false) {
        header("location: ../tourists_login.php?error=wronglogin");
        exit();
    }
    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($password, $pwdHashed);

    if($checkPwd===false){
         header("location: ../tourists_login.php?error=wronglogin");
         exit();
    }
    else if($checkPwd===true){
        session_start();
        $_SESSION["id"] = $uidExists["id"];
        $_SESSION["useruemail"] = $uidExists["email"]; 
        header("location: ../tourists.php");
        exit();
    }
}