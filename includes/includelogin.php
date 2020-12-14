
<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




if(isset($_POST['login']))
{

    extract($_POST);

   
        
    include 'database.php';
    global $db;

    

    if(!empty($mail) && !empty($pass))
    {
        
        $q = $db->prepare("SELECT * FROM users WHERE email = :email");
            $q->execute([
                'email'=>$mail]);

            $result = $q->fetch(); 
            
            if($result == true)
            {
            if(password_verify($pass, $result["pass"])){
                session_start();
                $_SESSION['firstname']=$result['firstname'];
                header ('Location: index.php');
                exit();
            }else {
                echo "The password is not correct!";
            }
        }else{
            echo "Don't existe an account on $mail";
        }
    }else{
        echo "Please fill all the field!";
    }
}

?> 