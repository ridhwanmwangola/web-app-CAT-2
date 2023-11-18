<?php
require_once "../includes/DB_Connect.php";

if(isset($_POST["send_message"])){
    $AuthorID = addslashes(strtolower($_POST["AuthorId"]));
    $Authorname = addslashes(strtolower($_POST["Authorname"]));
    $AuthorDOB = addslashes(strtolower($_POST["AuthorId"]));
    

    if(!filter_var($AuthorID, FILTER_VALIDATE_EMAIL)){
        die("Invalid AuthorID");
    }



    $stmt = $pdo->prepare("INSERT INTO authorstb (AuthorID, Authorname, AuthorDOB) VALUES (?, ?, ?,)");

    $stmt->execute([$AuthorID, $Authorname, $AuthorDOB,]);

    header("Location: ../Autregistration.php");
    exit();
}
if(isset($_POST["update_authordb"])){
    $AuthorID = addslashes(strtolower($_POST["AuthorID"]));
    $Authorname = addslashes(strtolower($_POST["Authorname"]));
    $AuthorDOB = addslashes($_POST["AuthorDOB"]);

  

    $stmt = $pdo->prepare("UPDATE authorstb SET AuthorID=?, Authorname=?, AuthorDob=?, WHERE AuthorID=? LIMIT 1");

    $stmt->execute([$AuthorID, $Authorname, $AuthorDOB,]);

    header("Location: ../Autregistration.php");
    exit();
}
?>