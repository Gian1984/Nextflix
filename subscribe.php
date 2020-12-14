<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/subscribe.css">
    <title>Document</title>
</head>
<body>
    
    <div class="logo">
       <img src="images/logo.png" alt="">
   </div>

<div class="wrapper">
        <div class="title">
            SUBSCRIBE
        </div>

        <form class="form" method="POST" action="">
            <div class="input_fild">
                <input name="fname" type="text" class="input" id="fname" placeholder="First name" required >
            </div>
            <div class="input_fild">
                <input name="lname" type="text" class="input" id="lname" placeholder="Last name" required >
            </div>
            <div class="input_fild">
                <input name="email1" type="email1" class="input" id="email1" placeholder="Email adress" required>
            </div>
            <div class="input_fild">
                <input name="pass1" type="password" class="input" id="pass1" placeholder="Password" required>
            </div>
            <div class="input_fild">
                <input name="pass2" type="password" class="input" id="pass2" placeholder="Confirm password" required>
            </div>

            <input type="submit" name="submit" value="  Subscribe  " style="width:auto">
            <a href="login.php" style="margin-left: 20%">Log in</a>
            <br>

            <?php include 'includes/includesubscribe.php'; ?>
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>