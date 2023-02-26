<?php include('db.php'); session_start(); ?>

<?php  

	$delete = mysqli_query($conn,"DELETE FROM users WHERE id = '{$_GET['id']}' ");
	header('location:verify_cred.php');

?>