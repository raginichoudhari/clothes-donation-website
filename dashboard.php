<?php
include("config.php");
if(!isset($_SESSION['user'])){ header("Location: index.php"); }
?>
<!DOCTYPE html>
<html>
<head>
<title>Dashboard</title>
<link rel="stylesheet" href="css/style.css">
    <style>
        .a{
            gap: 15px;
        }
    </style>
</head>
<body>
    <style>
        .a{
            gap: 15px;
        }
    </style>
<div class="container">
<h2>Welcome ❤️</h2>
<p>Help bring smiles by donating clothes</p>
<a href="donate.php"><button>Donate Clothes</button></a>
<a href="track.php"><button>Track Donation</button></a>
<a href="logout.php"><button>Logout</button></a>
</div>

</body>
</html>
