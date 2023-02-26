<?php include('db.php'); session_start(); ?>
<?php

	// fetch records
	$fetch_id = $_GET['id'];
	$select = mysqli_query($conn, "SELECT * FROM can_cred WHERE id = '$fetch_id' ");
	$select_row = mysqli_fetch_row($select);

?>

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
	$hash_password = md5($final_password);

	$update = mysqli_query($conn,"UPDATE can_cred SET password = '$hash_password', status = 'allowed' WHERE id = '{$_GET['id']}' ");
	header('location:verify_cred_cand.php');
?>

<?php 

$tomail = $select_row['4'];
$sub = "Sachivalay Canteen";
$message = "Hello from Sachivalay,
		 
		 	UserID :- $tomail

		 	Password :- $final_password

		 	Please do not share this password for security purposes.

		 	Thank you using our service.";
$header = 'MIME-VERSION: 1.0' . "\r\n";
$header .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$header .= 'To: '.$tomail."\r\n";
    if(mail($tomail,$sub,$message,$header))
    {
    	$myobj=array('status'=>'success','message'=>'Check your mail to reset password!');
    	echo json_encode($myobj);
    }
    else{
    	$myobj=array('status'=>'error','message'=>'Invalid e-mail!');
    	echo json_encode($myobj);
    }
?>