<!-- Header Include -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php include('header.php'); ?>

<?php  

	$admin = mysqli_query($conn,"SELECT * FROM admin WHERE id='{$_SESSION['admin_id']}'");
	$admin_row = mysqli_fetch_row($admin);

	$emp_details = mysqli_query($conn,"SELECT * FROM users WHERE id = '{$_GET['id']}'");
	$emp_details_row = mysqli_fetch_row($emp_details);

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
	            	<label><a href="home.php" class="a_left">Home</a>/<a href="enrolled_emp.php" class="a_right">Enrolled Employees</a>/<a href="enrolled_emp_details.php?id='.$_GET['id'].'" class="a_right">Details</a></label>
	            </div>
	            <div class="allow_listing">
	            	<table>

	            		<tr>
	            			<th>Sr No</th>
	            			<td>'.$emp_details_row['0'].'</td>
	            		</tr>
	            		<tr>
	            			<th>ID Number</th>
	            			<td>'.$emp_details_row['1'].'</td>
	            		</tr>
	            		<tr>
	            			<th>Name</th>
	            			<td>'.$emp_details_row['2'].'</td>
	            		</tr>
	            		<tr>
	            			<th>Email</th>
	            			<td>'.$emp_details_row['4'].'</td>
	            		</tr>
	            		<tr>
	            			<th>Phone</th>
	            			<td>'.$emp_details_row['5'].'</td>
	            		</tr>
	            		<tr>
	            			<th>Post</th> 
	            			<td>'.$emp_details_row['6'].'</td>
	            		</tr>
	            		<tr>
	            			<th>Status</th> 
	            			<td>'.$emp_details_row['7'].'</td>
	            		</tr>`

	            	</table>
	            </div>
			';

        }

?>
<title>Sachivalay - <?php echo $emp_details_row['1']; ?></title>