 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login form</title>
     <!-- <link rel="stylesheet" href="style.css"> -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Sono:wght@300&display=swap"
         rel="stylesheet">
     <link rel="stylesheet" href="G_login.css">
 </head>

 <body>
     <div class="form">
         <form action="includes/guides_login.inc.php" method="post">
             <h2>Log In</h2>
             <div class="input-box">
                 <i class="fa fa-user" aria-hidden="true"></i>
                 <input type="email" name="email" placeholder="Email" required>
             </div>
             <div class="input-box">
                 <i class="fa fa-unlock-alt" aria-hidden="true"></i>
                 <input type="password" name="password" placeholder="Password"
                     pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                     title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                     required>
             </div>
             <div class="input-box">
                 <input type="submit" name="submit" value="Login">
             </div>
         </form>
     </div>
     <?php 
     if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p>Fill in all fields</p>";
        }
        else if($_GET["error"]=="wronglogin"){
            echo "<p>Incorrect login information</p>";
        }
     }
     ?>
 </body>

 </html>