<?php
include 'includes/db.php';
include("config.php");
if(isset($_POST['donate'])){
    $uid=$_SESSION['user'];
    $type=$_POST['type'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $qty=$_POST['qty'];
    $notes=$_POST['notes'];
    $delivery=$_post['delivery_type'];
    $conn->query("INSERT INTO donations(user_id,type,age_group,gender,quantity,notes) VALUES('$uid','$type','$age','$gender','$qty','$notes')");
session_start();
$_SESSION['donation_data']=$_POST;
if($delivery=='drop'){
    header("location:contact.php");
}else{
    header("location:pickup.php");
}
    }
?>
<!DOCTYPE html>
<html>
<head>
<title>Donate</title>
<link rel="stylesheet" href="css/style.css">
</head>
<script>
function handleDonationType(value) {
    if (value === "pickup") {
        document.getElementById("pickupAddress").style.display = "block";
    } 
    else if (value === "drop") {
        window.location.href = "contact.php"; // redirect to contact page
    } 
    else {
        document.getElementById("pickupAddress").style.display = "none";
    }
}
</script>
<body>
<div class="container">
    <div class="navbar"> 
    <a href="home.php">Home</a>
    <a href="dashboard.php">Dashboard</a>
    <a href="donate.php">Donate</a>
    <a href="track.php">Track</a>
    <a href="logout.php">Logout</a>
    <a href="contact.php">contact</a>
</div>
<h2>Donate Clothes</h2>
<form method="POST">
<input type="text" name="type" placeholder="Type of Clothes" required>
<select name="age"><option>Kids</option><option>Adults</option></select>
<select name="gender"><option>Boys</option><option>Girls</option><option>Male</option><option>Female</option></select>
<input type="number" name="qty" placeholder="Quantity">
<textarea name="notes" placeholder="Additional Notes"></textarea>
<button name="donate">Submit Donation <br></button>
<label for="donationType">Select Donation Method:</label>
<select name="donationType" id="donationType" onchange="handleDonationType(this.value)" required>
    <option value="">-- Select Option --</option>
    <option value="drop">Drop at Location</option>
    <option value="pickup">Request Pickup</option>
</select>

<br><br>

<div id="pickupAddress" style="display:none;">
    <label>Enter Pickup Address:</label>
    <textarea name="pickup_address" rows="4" placeholder="Enter your full address"></textarea>
</div>

<br>
</form>
</div>
</body>
</html>
