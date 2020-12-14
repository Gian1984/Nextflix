<?php
    include("secretInfo.php");
    $userData = userData;
    $userPass = passData;
    define('HOST','sql207.epizy.com'); 
    define('DATABASE','epiz_27348453_nextflix'); 

    try {
    $db = new PDO("mysql:host=".HOST.";dbname=".DATABASE,$userData,$userPass);
    $db ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
};

?>