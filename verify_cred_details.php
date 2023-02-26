<!-- Header Include -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php include('header.php'); ?>

<?php  

	$admin = mysqli_query($conn,"SELECT * FROM admin WHERE id='{$_SESSION['admin_id']}'");
	$admin_row = mysqli_fetch_row($admin);

	$cred_details = mysqli_query($conn,"SELECT * FROM users WHERE id = '{$_GET['id']}'");
	$cred_details_row = mysqli_fetch_row($cred_details);

	if (mysqli_num_rows($admin)>0) 
        {
            echo '

            	<div class="sidebar">
	            	<label><a href="home.php">Home</a></label>
	            	<label><a href="verify_cred.php">Verify Employee</a></label>
	            	<label><a href="verify_cred_cand.php">Verify Canteen</a></label>
	            	<label><a href="enrolled_emp.php">Enrolled Employees</a></label>
	            	<label><a href="enrolled_can.php">Enrolled Canteens</a></label>
	            	<label><a href="wallet.php">Add Wallet</a></label>
	            	<label><a href="logout.php">Logout</a></label>
	            </div>
	            <div class="bread_crumb">
	            	<label><a href="home.php" class="a_left">Home</a>/<a href="verify_cred.php" class="a_right">Verify Employees</a>/<a href="verify_cred_details.php?id='.$_GET['id'].'" class="a_right">Employees Details</a></label>
	            </div>
	            <div class="allow_listing">
	            	<table>

	            		<tr>
	            			<th>Sr No</th>
	            			<td>'.$cred_details_row['0'].'</td>
	            		</tr>
	            		<tr>
	            			<th>ID Number</th>
	            			<td>'.$cred_details_row['1'].'</td>
	            		</tr>
	            		<tr>
	            			<th>Name</th>
	            			<td>'.$cred_details_row['2'].'</td>
	            		</tr>
	            		<tr>
	            			<th>Email</th>
	            			<td>'.$cred_details_row['4'].'</td>
	            		</tr>
	            		<tr>
	            			<th>Phone</th>
	            			<td>'.$cred_details_row['5'].'</td>
	            		</tr>
	            		<tr>
	            			<th>Post</th> 
	            			<td>'.$cred_details_row['6'].'</td>
	            		</tr>
	            		<tr>
	            			<th>Status</th> 
	            			<td>'.$cred_details_row['5'].'</td>
	            		</tr>

	            	</table>
	            	<a href="allowed_cred.php?id='. $cred_details_row['0'] .'" class="allow">Allow Credentials</a>
	            	<a href="reject_cred.php?id='. $cred_details_row['0'] .'" class="reject">Reject Credentials</a>
	            </div>
			';

        }

?>
<title>Sachivalay - <?php echo $cred_details_row['1']; ?></title>