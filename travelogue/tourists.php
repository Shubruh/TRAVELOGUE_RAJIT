<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guides</title>
    <link rel="stylesheet" href="guides.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200&display=swap" rel="stylesheet">
</head>

<body>
    <div id="background">
        <div id="panel-box">
            <div class="panel">
                <div class="auth-form on" id="login">
                    <div id="form-title">
                        <h6>for tourists only</h6>
                    </div>
                    <div id="form-title">Welcome to </div>
                    <div id="form-title">Travelouge</div>
                    <?php
    if(isset($_SESSION["useruemail"])){
        echo " <a href='#'>
                <button class='GFG'> Profile page
                </button> </a>
            <!-- LOG IN BUTTON -->
            <a href='includes/tourists_logout.inc.php'>
                <button class='GFG'> Log out
                </button> </a>
                
            <a href='tourists_result.php'>
                <button class='GFG'> Get guide
                </button> </a>";      
    }
    else{
        echo " <div class='signUpBtn2'>
                    <a href='tourists_signup.php'>
                    <button class='GFG'> Sign up
                    </button> </a>
                </div>
            <!-- LOG IN BUTTON -->
            <div class='logInBtn'>
                <a href='tourists_login.php'>
                <button class='GFG'> Log in
                </button> </a>
            </div>" ;
    }
    ?>
                </div>
            </div>
            <div class="panel">
                <div id="image-overlay"></div>
                <div id="image-side"></div>
            </div>
        </div>
    </div>
    <script src="guides_src.js"></script>
</body>

</html>