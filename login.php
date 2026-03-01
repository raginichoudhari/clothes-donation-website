<?php
include("config.php");
if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $res=$conn->query("SELECT * FROM users WHERE email='$email'");
    if($row=$res->fetch_assoc()){
        if(password_verify($password,$row['password'])){
            $_SESSION['user']=$row['id'];
            header("Location: dashboard.php");
        } else { echo "Wrong Password!"; }
    } else { echo "User Not Found!"; }
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Login</h2>
<form method="POST">
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="login">Login</button>
<p>Don't have account? <a href="register.php">Register</a></p>
</form>
</div>
</body>
</html>
