<?php include('db.php'); session_start(); ?>
<link rel="stylesheet" href="css/style.css" />
<title>Sachivalay - Admin Login</title>
<!-- Login code -->
<?php  

	if (isset($_POST['submit'])) 
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
 
 		$query = mysqli_query($conn,"SELECT * FROM admin WHERE username = '$username' and password = '$password'");
 		
	   if($query == TRUE)
	   {

			if (mysqli_num_rows($query)>0) 
			{	
	  		  	$row = mysqli_fetch_row($query);
	        	$_SESSION['admin_id'] = $row[0];
	  			header('location:home.php');
			}
			else
			{
	  			echo"<script>alert('Something is incorrect please try again')</script>";
			}
		}
}

?>
<form class="authen_form admin_login" method="POST">
	<h2>Log Into Sachivalay</h2>
	<input type="text" placeholder="Username" name="username" style="padding-left: 10px;background: white;">
	<input type="password" placeholder="Password" name="password" style="padding-left: 10px;background: white;">
	<input type="submit" value="Login" name="submit">
</form>

<?php include('footer.php'); ?>