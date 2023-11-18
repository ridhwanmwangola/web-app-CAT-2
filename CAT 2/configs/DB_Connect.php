<?php
    require_once "constants.php";
    try{
        $pdo = new PDO("mysql:host=$host1; dbname=$authordb", $ridhwan, $BIGdaddy3);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
       // echo "Connected Successfully!!";
    } catch(PDOException $e){
        echo "Connection failed: " . $e->getMessage();
    }
?>