<?php
#pull003	
#Push001
	#TestPull
	$name = $_POST['name'];
	$jersey_no = $_POST['jersey_no'];
	
	$link= mysqli_connect('localhost','root','','project');
	
	
		$query = "Delete  from `test` WHERE jersey_no = '$jersey_no'";
		if(mysqli_query($link,$query))
		{
			$query = "Delete  from `odi` WHERE  jersey_no = '$jersey_no'";
			if(mysqli_query($link,$query))
			{
				$query = "Delete  from `t20` WHERE  jersey_no = '$jersey_no'";
				if(mysqli_query($link,$query))
				{
					$query = "Delete  from `players` WHERE name='$name' AND jersey_no = '$jersey_no'";
					if(mysqli_query($link,$query))
					{
						$query = "Delete  from `dependants` WHERE jersey_no = '$jersey_no'";
						if(mysqli_query($link,$query))
						{

							echo "<script>alert('Deleted!');</script>";
						}
					}
				
				}	
		
			}
	
		}
	
	


?>
