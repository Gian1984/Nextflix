
<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit'])){

    extract($_POST);

    
  
    if(!empty($pass1) && !empty($pass2) ){

        $options = [
            'cost' => 12,
        ];
        
        
        $hashpass= password_hash($pass1, PASSWORD_BCRYPT , $options);

        include 'database.php';
        global $db;
        
        
        $q = $db->prepare("INSERT INTO users (firstname, lastname, email, pass) VALUES ('$fname','$lname','$email1','$hashpass')");
        $q->execute([
            'firstname'=>$fname,
            'lastname'=>$lname,
            'email'=>$email1,
            'pass'=>$hashpass
            ]);

        echo "<p>Yes! Now you have an account! Go to log in!</p>";
        header('login.php');
    }else{
        echo "<p>Please fill all the field correctly!</p>";
    }
}

?> 