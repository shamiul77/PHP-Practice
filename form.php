<?php
if(isset($_POST['submit'])){
    $username = $_POST['userName'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
</head>
<body>
    <H2>Username- <?php echo $username?></H2>
    <H2>Email-<?php echo $email?></H2>
    <H2>Password-<?php echo $password?></H2>



    <form action="" method="POST">
        <label >Username</label>
        <input type="text" name="userName"><br><br>
        <label >Email</label>
        <input type="email" name="email"><br><br>
        <label >Password</label>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Submit" name="submit">


    </form>
</body>
</html>