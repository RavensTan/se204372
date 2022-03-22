<?php 
    session_start();
    include('connection.php'); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>

    <link rel="stylesheet" href="stlye.css">
</head>
<body>
    
    <div align="center">
        <img scr="image/KU_Logo.png" width='400px'>
    </div>


    <div class="header">
        <h1>Login</h1>
    </div>
    <form action="login_db.php" method="post">
        <div class="input-group">
             <label for="username">username</label>
             <input type="text" name="username">
        </div>
        <div class="input-group">
             <label for="password">password</label>
             <input type="password" name="password">
        </div>
        <u>forget password? / sign up</u>
        <div class="input-group">
             <button type="submit" name="login_user" class="btn">login</button>
        </div>
    </form>
         
 </div>

</body>
</html>