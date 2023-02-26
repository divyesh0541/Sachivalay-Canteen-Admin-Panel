<?php include('db.php'); session_start(); ?>

<?php  
	
	function rand_password($length_of_string)
	{
	 
	    // String of all alphanumeric character
	    $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';
	 
	    // Shuffle the $str_result and returns substring
	    // of specified length
	    return substr(str_shuffle($str_result),
	                       0, $length_of_string);
	}

	echo "\n";
	 
	// This function will generate
	// Random string of length 8
	$final_password = rand_password(8);
	$hash = md5($final_password);
	echo $final_password;
	echo "<br>";
	echo $hash;
	// $update = mysqli_query($conn,"UPDATE emp_cred SET password = '$final_password', status = 'allowed' WHERE id = '{$_GET['id']}' ");
	// header('location:verify_cred.php');
?>