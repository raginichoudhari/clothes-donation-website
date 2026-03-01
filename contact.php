<?php
include(__DIR__."/includes/db.php");

if(isset($_POST['pickup_submit'])){
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    $sql = "INSERT INTO pickup_requests (name, phone, address) 
            VALUES ('$name','$phone','$address')";
    mysqli_query($conn,$sql);
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">
    <div class="navbar">
        <a href="home.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="donate.php">Donate</a>
        <a href="track.php">Track</a>
        <a href="logout.php">Logout</a>
        <a href="contact.php">Contact</a>
    </div>

    <!-- Contact Card -->
    <div class="card">

        <iframe 
            src="https://www.google.com/maps?q=Kalamboli,Navi Mumbai&output=embed"
            width="100%" height="250"
            style="border-radius:10px; border:0;">
        </iframe>
    </div>

    <!-- Pickup Request Card -->
    <div class="card">
        <h2>Request Pickup</h2>

        <form method="POST">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="text" name="phone" placeholder="Phone Number" required>
            <textarea name="address" rows="4" placeholder="Enter Pickup Address" required></textarea>
            <button type="submit" name="pickup_submit">Submit Pickup Request</button>
        </form>
    </div>

</div>

</body>
</html>