
<html>
<head>
<style>
body
	{
		background: url(backgroundimage.jpg);
		background-size:cover;
		color:white;
		
		background-color: transparent;
		
	}
</style>	
</head>
<body>



<?php
			$link= mysqli_connect('localhost','root','','project');
			
			if (mysqli_connect_error()) 
			{
	     			die ("There was an error connecting to the database");
	        		}
	       		 else
	        		{
	        			if( isset($_POST['min100s'])  &&  isset($_POST['max100s']))
	        			{
		        			$min100s = $_POST['min100s'];
		        			$max100s = $_POST['max100s'];
		        			$query = "SELECT *	from `players` WHERE (tot_100s between '$min100s' and '$max100s')  ";	
	       	 		}
	      			if( isset($_POST['min50s'])  &&  isset($_POST['max50s']))
	        			{
		        			$min50s = $_POST['min50s'];
	        				$max50s = $_POST['max50s'];
	        				$query = "SELECT *	from `players` WHERE (tot_50s between '$min50s' and '$max50s')  ";
	        			}
	        			if( isset($_POST['minwickets'])  &&  isset($_POST['maxwickets']))
	        			{
		        			$minwickets = $_POST['minwickets'];
	        				$maxwickets = $_POST['maxwickets'];
	        				$query = "SELECT *	from `players` WHERE (tot_wickets between '$minwickets' and '$maxwickets')  ";
	        			}
	        			
	        			
	        			
		        		$result = mysqli_query($link,$query);
		        		$count = 0;
		        		if (mysqli_num_rows($result) == 0)
		        		{
					echo "<script>alert('No Player Found');window.location.href = 'index.php';</script>";
					
				}								
		        		while($row = mysqli_fetch_row($result))
		        		{
		        			
		        			echo "<table border=1px style= "."font-size:20px;margin-left:47%;margin-top:100px > <tr> <td>".$row[1]."</td> </tr> <table>" ;
		        			$count++;
		        			
		        			
		        		}
	        		}
?>
	
</body>
</html>
	       
