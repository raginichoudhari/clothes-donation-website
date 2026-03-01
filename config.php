<?php
$conn = new mysqli("localhost","root","","clothes_donation");
if($conn->connect_error){ die("Connection Failed"); }
session_start();
?>
