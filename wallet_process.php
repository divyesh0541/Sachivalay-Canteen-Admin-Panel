<!-- Header Include -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Sachivalay - Allow Listing</title>
<?php include('header.php'); ?>
<?php

	$fetch_id = $_GET['id'];
	$c_date = date("Y/m/d");

	$insert_q = mysqli_query($conn,"INSERT INTO user_wallet (emp_id,amount,cur_date,status) VALUES ('$fetch_id',5000,'$c_date','sent')");
	// for duplicates
	error_reporting(0);

	// update

	$update_q = mysqli_query($conn,"UPDATE users SET payment_status = 'sent' WHERE id_number = '$fetch_id' ");

	header('location:wallet.php');
?>