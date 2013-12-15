<?php
include('config.php');
//if (isset($_POST['update'])) {

//tangkap data dari form
$id = $_POST['user_id'];
$username = $_POST['username'];
$password = $_POST['pass'];
$email = $_POST['email'];
$gender = $_POST['radio1'];
$date = $_POST['date'];
$month = $_POST['month'];
$year = $_POST['year'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$address = $_POST['address'];
$no_hp = $_POST['hp'];


//update data di database sesuai user_id
$ups = mysql_query("UPDATE user SET password='$password', date='$date', month='$month', year='$year',firstname='$firstname', lastname='$lastname', address='$address', email='$email', no_hp='$no_hp' where id='$id'") or die(mysql_error());

if ($ups) {
	header('location:profile.php?message=success');
}
//}
?>