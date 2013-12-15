<?php
//panggil file config.php untuk menghubung ke server
include('config.php');

//tangkap data dari form

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['radio1'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$address = $_POST['address'];
$no_hp = $_POST['hp'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['pass'];
$ids = $_GET['id'];
$id = $_POST['id'];

//simpan data ke database
$query = mysql_query("insert into user values('$username', '$password','$gender','$date','$month','$year','$firstname','$lastname', '$address','$email', '$no_hp', '$id')") or die(mysql_error());

if ($query) {
	header('location:home.php?message=success');
}
?>