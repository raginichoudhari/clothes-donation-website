<?php
include("config.php");
if(isset($_POST['register'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=password_hash($_POST['password'], PASSWORD_DEFAULT);
    $conn->query("INSERT INTO users(name,email,password) VALUES('$name','$email','$password')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Register</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Create Account</h2>
<form method="POST">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="password" name="password" placeholder="Password" required>
<button name="register">Sign Up</button>
</form>
</div>
</body>
</html>
