
<?php
	session_start();
	ob_start();
	include('include/Connection.php');
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$query = "SELECT * from users WHERE username='$username'"; //Query the users table if there are matching rows equal to $username
	//echo var_dump($query);
	$qry=mysqli_query($conn,$query)or die ('Error updating database: '.mysql_error());
	$exists = mysqli_num_rows($qry); //Checks if username exists
	
	$table_users = "";
	$table_password = "";
	if($exists > 0) //IF there are no returning rows or no existing username
	{
		while($row = mysqli_fetch_assoc($qry)) //display all rows from query
		{
			$table_users =strtolower( $row['username']); // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
		}
		if(($username == $table_users) && ($password == $table_password)) // checks if there are any matching fields
		{
				if($password == $table_password)
				{
					$_SESSION['user']=$username;
					//header("location:/J15/reg.php"); // redirects the user to the authenticated home page
					echo '<script type="text/javascript">

					<!--
					window.location = "dashboard.php"
					//-->
					</script>';
					
					
				}
				
		}
		else
		{
			Print '<script>alert("Check your username/password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
			
		}
	}
	
=======
<?php
	session_start();
	ob_start();
	include('include/Connection.php');
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	//echo $username;
	if($username=="admin" || $username=="hodce" ||$username=="hodme" ||$username=="hodcl" ||$username=="hodec" ||$username=="hodee" ||$username=="hodmba" ||$username=="hodmaths" ||$username=="director")
	{
    $query = "SELECT * from master_users WHERE username='$username'"; //Query the users table if there are matching rows equal to $username
	//echo var_dump($query);
	$qry=mysqli_query($conn,$query);
	
	}
	else{
			//echo 'This is there';	

	$query = "SELECT * from users WHERE username='$username'"; //Query the users table if there are matching rows equal to $username
	//echo var_dump($query);
	$qry=mysqli_query($conn,$query);
	}
	$exists = mysqli_num_rows($qry); //Checks if username exists
	$table_users = "";
	$table_password = "";
	if($exists > 0) //IF there are no returning rows or no existing username
	{
		while($row = mysqli_fetch_assoc($qry)) //display all rows from query
		{
			$table_users =strtolower( $row['username']); // the first username row is passed on to $table_users, and so on until the query is finished
			$table_password = $row['password']; // the first password row is passed on to $table_users, and so on until the query is finished
			$role=$row['role'];
		}
		if(($username == $table_users) && ($password == $table_password)) // checks if there are any matching fields
		{
				if($password == $table_password && $role=="fac")
				{
					$_SESSION['user']=$username;
					$_SESSION['role']=$role;
					//header("location:/J15/reg.php"); // redirects the user to the authenticated home page
					echo '<script type="text/javascript">

					<!--
					window.location = "dashboard.php"
					//-->
					</script>';
					
					
				}
				if($password == $table_password && $role=="hod")
				{
					$_SESSION['user']=$username;
					$_SESSION['role']=$role;
					//header("location:/J15/reg.php"); // redirects the user to the authenticated home page
					echo '<script type="text/javascript">

					<!--
					window.location = "dashboard.php"
					//-->
					</script>';
					
					
				}
					if($password == $table_password && $role=="admin")
				{
					$_SESSION['user']=$username;
					$_SESSION['role']=$role;
					//header("location:/J15/reg.php"); // redirects the user to the authenticated home page
					echo '<script type="text/javascript">

					<!--
					window.location = "dashboard.php"
					//-->
					</script>';
					
					
				}
					if($password == $table_password && $role=="director")
				{
					$_SESSION['user']=$username;
					$_SESSION['role']=$role;
					//header("location:/J15/reg.php"); // redirects the user to the authenticated home page
					echo '<script type="text/javascript">

					<!--
					window.location = "dashboard.php"
					//-->
					</script>';
					
					
				}
		}
		else
		{
			Print '<script>alert("Check your username/password!");</script>'; //Prompts the user
			Print '<script>window.location.assign("login.php");</script>'; // redirects to login.php
			
		}
	}
	

?>