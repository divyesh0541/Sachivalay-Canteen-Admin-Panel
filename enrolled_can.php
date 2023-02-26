<!-- Header Include -->
<link rel="stylesheet" type="text/css" href="css/style.css">
<title>Sachivalay - Allow Listing</title>
<?php include('header.php'); ?>
<?php  

	$admin = mysqli_query($conn,"SELECT * FROM admin WHERE id='{$_SESSION['admin_id']}'");
	$admin_row = mysqli_fetch_row($admin);

	$cand = mysqli_query($conn,"SELECT * FROM can_cred WHERE status = 'allowed'");

	if (mysqli_num_rows($admin)>0)
       {
            echo "

            	<div class='sidebar'>
	            	<label><a href='home.php'>Home</a></label>
	            	<label><a href='verify_cred.php'>Verify Employee</a></label>
	            	<label><a href='verify_cred_cand.php'>Verify Canteen</a></label>
	            	<label><a href='enrolled_emp.php'>Enrolled Employees</a></label>
	            	<label><a href='enrolled_can.php'>Enrolled Canteens</a></label>
	            	<label><a href='wallet.php'>Add Wallet</a></label>
	            	<label><a href='logout.php'>Logout</a></label>
	            </div>
	            <div class='bread_crumb'>
	            	<label><a href='home.php' class='a_left'>Home</a>/<a href='enrolled_emp.php' class='a_right'>Enrolled Canteen</a></label>
	            </div>
	            <div class='allow_listing'>
					<table>
						<tr>
							<th>Sr No</th>
							<th>ID Number</th>
							<th>Name</th>
							<th>Phone</th>
							<th>Email</th>
							<th>Action</th>
						</tr>
					";

					$i=1;
					while ($cand_row = mysqli_fetch_row($cand)) 
					{
						echo '

								<tr>
									<td>'.$i.'</td>
									<td>'.$cand_row['1'].'</td>
									<td>'.$cand_row['2'].'</td>
									<td>'.$cand_row['5'].'</td>
									<td>'.$cand_row['4'].'</td>
									<td><a href="enrolled_can_details.php?id='. $cand_row['0'] .'">View</a></td>
								</tr>

							';
						$i++;
					}
						
						
					echo "
							<tr>
								<th>Sr No</th>
								<th>ID Number</th>
								<th>Name</th>
								<th>Phone</th>
								<th>Email</th>
								<th>Action</th>
							</tr>
						</table>
				</div>

					";
					

            
        }

?>