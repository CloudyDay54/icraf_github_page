<?php
$ServerName = 'localhost';
$UserName= 'root';
$Password = '';
$db = 'icraf_project';
// Create connection to the database
$conn = new mysqli($ServerName, $UserName, $Password, $db) or die('Could not connect');
echo "Connected Successfully";
?>
