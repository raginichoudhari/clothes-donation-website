<?php
session_start();
if(!isset($_SESSION['user_id'])){
    header("Location: register.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="navbar">
    <a href="home.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="donate.php">Donate</a>
    <a href="track.php">Track</a>
    <a href="logout.php">Logout</a>
      <a href="contact.php">contact</a>
</div>

<h2 style="text-align:center;">Welcome to Clothes Donation System 💚</h2>

</body>
</html>