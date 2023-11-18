<?php
require_once "includes/DB_Connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAT 2</title>
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  
    <?php require "includes/navigation.php"; ?>
 
<div class="header">
    <h1>Author details</h1>
</div>

<div class="row">
    <div class="content">
<h3>Input author details</details></h3>

<?php
if(isset($_GET["EditId"])){
    $stmt = $pdo->prepare("SELECT * FROM authordb WHERE authorId=? LIMIT 1");
    $stmt->execute([$_GET["EditId"]]);
    $messages = $stmt->fetch();
}
?>

<form action="processes/messages_proc.php" method="POST">
    <label for="AUthor name">Author name</label><br>
    <input type="text" name="Author name" id="Author name" placeholder="Enter your name" value="<?php print $messages["Author name"]; ?>" maxlength="60" required /><br><br>

    <label for="Author publisher">Receiver Email:</label><br>
    <input type="email" name="publisher email" id="publisher email" placeholder="Enter publishers email" value="<?php print $messages["publisher email"]; ?>" maxlength="60" /><br><br>

  
    <input type="submit" name="update_message" value="Update Message" />
    <input type="hidden" name="messageId" value="<?php print $messages["messageId"]; ?>" />

</form>

    </div>
    <div class="sidebar">

  
<div class="footer">
</div>
</body>
</html>