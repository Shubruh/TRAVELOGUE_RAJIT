 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Welcome to travel form</title>
     <!-- <link rel="stylesheet" href="style.css"> -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&family=Sono:wght@300&display=swap"
         rel="stylesheet">
     <link rel="stylesheet" href="signup.css">
 </head>

 <body>
     <div id="main" class="main-container">
         <div class="box">
             <h2>Signup</h2>
             <form action="includes/tourists_signup.inc.php" method="post">
                 <div class="input-box">
                     <input type="text" name="firstname" id="firstname">
                     <label>firstname</label>
                 </div>
                 <div class="input-box">
                     <input type="text" name="lastname" id="lastname">
                     <label>lastname</label>
                 </div>
                 <div class="input-box">
                     <input type="text" name="age" id="age">
                     <label>Age</label>
                 </div>
                 <div class="input-box">
                     <input type="text" name="gender" id="gender">
                     <label>gender</label>
                 </div>

                 <div class="input-box">
                     <input type="email" name="email" id="email">
                     <label>Email</label>
                 </div>
                 <div class="input-box">
                     <input type="text" name="phone" id="phone">
                     <label>phone</label>
                 </div>
                 <div class="input-box">
                     <input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
                         title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"
                         required>
                     <label>Password</label>
                 </div>
                 <div class="input-box">
                     <input type="password" name="repass" id="repass">
                     <label>Enter password again</label>
                 </div>
                 <<button type="submit" name="submit">Sign up</button>
             </form>

         </div>
         <?php 
     if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
            echo "<p>Fill in all fields</p>";
        }
        else if($_GET["error"]=="passwordsdontmatch"){
            echo "<p>Passwords Don't match</p>";
        }
        else if($_GET["error"]=="emailalreadyinuse") {
            echo "<p>Email is already in use.</p>";
        }
        else if($_GET["error"]=="stmtfailed") {
            echo "<p>Something went wrong Try again later.</p>";
        }
        else if($_GET["error"]=="none") {
            echo "<p>You're signed up.</p>";
        }
     }
     ?>
         <script src="signup.js"></script>
 </body>


 </html>