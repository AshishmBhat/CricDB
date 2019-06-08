<?php
	
	session_start();
	$link= mysqli_connect('localhost','root','','project');
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query = "SELECT * from `admin` WHERE username='$username' AND password = '$password' ";
	$result = mysqli_query($link,$query);								
	if(mysqli_num_rows($result) > 0)
	{
		$_SESSION['username'] = $username;
		echo "<script>window.location.href='adminsession.php'; </script> ";
		//header('Location: adminsession.php' );
	}
	else
	{
		echo " <script> 
		var x = confirm('Invalid credentials. Retry?');
		if(x==1) 
		{
			window.location.href='index.php';
		}
		</script>" ;
	}


?>
