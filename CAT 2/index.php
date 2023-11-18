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

</div>

<div class="row">
    <div class="content">
<h3>Register Here</h3>

<form action="" method="POST">
    <label for="AuthorID">Author ID:</label><br>
    <input type="AuthorFullName" name="fullname" id="fullname" placeholder="Enter your name" maxlength="60" required /><br><br>
    <label for="Authoraddress">Email Address:</label><br>
    <input type="email" name="Authoraddress" id="Authoraddress" placeholder="Enter your email address" maxlength="60" /><br><br>
    <label for="biography">biography</label><br>
    <input type="text" name="phone_number" id="phone_number" placeholder="Enter your phone number" maxlength="13" /><br><br>
    <label for="dob">Date of Birth:</label><br>
    <input type="date" name="dob" id="dob" /><br><br>
    <label for="Authorsuspended">password</label><br>
    <input type="password" name="password" id="password" placeholder="Enter your password" /><br><br>
    <label for="Conf_password">Password:</label><br>
    </select>
    <br><br>

    <input type="checkbox" name="tnc" id="tnc" value="1"/> <label for="tnc">Accept Terms & Conditions</label>
    <br><br>

   <input type="submit" name="sign_up" value="Sign Up" />
    <br><br>
</form>

<div class="footer">

</div>
</body>
</html>