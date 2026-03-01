<?php
include("config.php");
$uid=$_SESSION['user'];
$res=$conn->query("SELECT * FROM donations WHERE user_id='$uid'");
?>
<!DOCTYPE html>
<html>
<head>
<title>Track Donation</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <div class="navbar"> <br>
    <a href="home.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="donate.php">Donate</a>
    <a href="track.php">Track</a>
    <a href="logout.php">Logout</a>
      <a href="contact.php">contact</a>
</div>
<h2>Donation Tracking</h2>
<?php while($row=$res->fetch_assoc()){ ?>
<p>Type: <?= $row['type'] ?><br>Status: <?= $row['status'] ?><hr></p>
<?php } ?>
<a href="dashboard.php"><button>Back</button></a>
</div>

</body>
</html>
