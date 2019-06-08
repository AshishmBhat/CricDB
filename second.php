	<?php
			$link= mysqli_connect('localhost','root','','project');
			
			if (mysqli_connect_error()) 
			{
	     			die ("There was an error connecting to the database");
	        		}
	       		 else 
	        		{
	       
	 			$name=$_POST['search'];     
	        		
	        		
		        		$query = "SELECT * from `players` WHERE name='$name' ";
		        		$result = mysqli_query($link,$query);								//Players DB
		        		$row = mysqli_fetch_array($result);
		        		if (mysqli_num_rows($result) == 0)
		        		{
					echo "<script>alert('No Such player Found');window.location.href = 'index.php';</script>";
					
				}
				else
				{
			        		$jersey_no = $row["jersey_no"];
			        		$name = $row["name"];
			        		$dob=$row["dob"];
			        		$age=$row["age"];
			        		$state=$row["state"];
			        		$role=$row["role"];
			        		$description=$row["description"];
			        		$tot_100s=$row['tot_100s'];
			       		$tot_50s=$row['tot_50s'];
			       		$tot_wickets=$row['tot_wickets'];
		        		

				$query= "SELECT * from `test` WHERE jersey_no='$jersey_no' ";
		        		$result = mysqli_query($link,$query);
		        		$row= mysqli_fetch_array($result);
		        			$test_matches = $row["matches"];
			        		$test_runs=$row["runs"];
			        		$test_highscore=$row["highscore"];
			        		$test_bat_avg=$row["bat_avg"];
			        		$test_bat_strike_rate=$row["bat_strike_rate"];
			        		$test_100s=$row["100s"];
			        		$test_50s=$row["50s"];
			        		$test_wickets=$row["wickets"];
			        		$test_economy=$row["economy"];
			        		$test_5ws=$row["5ws"]; 
			        		
			        		
			        		
				$query= "SELECT * from `odi` WHERE jersey_no='$jersey_no' ";
		        		$result = mysqli_query($link,$query);
		        		$row= mysqli_fetch_array($result);
		        			$odi_matches = $row["matches"];
			        		$odi_runs=$row["runs"];
			        		$odi_highscore=$row["highscore"];
			        		$odi_bat_avg=$row["bat_avg"];
			        		$odi_bat_strike_rate=$row["bat_strike_rate"];
			        		$odi_100s=$row["100s"];
			        		$odi_50s=$row["50s"];
			        		$odi_wickets=$row["wickets"];
			        		$odi_economy=$row["economy"];
			        		$odi_5ws=$row["5ws"]; 
			        		
			        	$query= "SELECT * from `t20` WHERE jersey_no='$jersey_no' ";
		        		$result = mysqli_query($link,$query);
		        		$row= mysqli_fetch_array($result);
		        			$t20_matches = $row["matches"];
			        		$t20_runs=$row["runs"];
			        		$t20_highscore=$row["highscore"];
			        		$t20_bat_avg=$row["bat_avg"];
			        		$t20_bat_strike_rate=$row["bat_strike_rate"];
			        		$t20_100s=$row["100s"];
			        		$t20_50s=$row["50s"];
			        		$t20_wickets=$row["wickets"];
			        		$t20_economy=$row["economy"];
			        		$t20_5ws=$row["5ws"]; 
			        		
		       	 	
		        	
		        		$query = "SELECT * from `dependants` WHERE jersey_no='$jersey_no' ";
		        		$result = mysqli_query($link,$query);								//Players DB
		        		$row = mysqli_fetch_array($result);
		        		$spouse=$row['name']; 
		        		
		        		}
			
			


			}
		
	?>

	<!DOCTYPE html>
	<html>
	<head>
	
	
		<title>
			bcci
		</title>
	</head>
	<body style="background: url(backgroundimage2.jpg);background-size:100%;color:white;font-size:18px;font-size:20px" >
	

		<div class = "first "style="border-width: 5px; width:20%;border-style:solid;height:720px;float: left;" >
			<table height ="450px"cellpadding="5" cellspacing="15">
				

					<tr >
						<th  colspan="2">Personal Information</th>
					</tr>
					
					<tr>
					</tr>
					
					<tr>
						<td>Name</td>
						<td><?php echo $name ?></td>
					</tr>
					
					<tr>
					</tr>
					
					<tr>
						<td>Jersey </td>
						<td><?php echo "#".$jersey_no ?></td>
					</tr>
					
					<tr>
					</tr>
					
					<tr>
						<td>Born</td>
						<td><?php echo $dob ?></td>
					</tr>
					
					<tr>
					</tr>
					
					<tr>
						<td>Age</td>
						<td><?php echo $age ?></td>
					</tr>
					
					<tr>
					</tr>
					
					<tr>
						<td>Place</td>
						<td><?php echo $state ?></td>
					</tr>
					
					<tr>
					</tr>
					
					<tr>
						<td>Role</td>
						<td><?php echo $role ?></td>
					</tr>
					
					</tr>
					
					<tr>
					
					<tr>
						<td>100s</td>
						<td><?php echo $tot_100s ?></td>
					</tr>
					
					<tr>
					
					</tr>
					
					<tr>
						<td>50s</td>
						<td><?php echo $tot_50s ?></td>
					</tr>
					
					<tr>
					
					</tr>
					
					<tr>
						<td>Wickets</td>
						<td><?php echo $tot_wickets ?></td>
					</tr>
					
					<tr>
					
					</tr>
					
					<tr>
						<td>Spouse</td>
						<td><?php echo $spouse ?></td>
					</tr>
					
					

			</table>
			
		</div>
		
		<!------------------------------------------------------------------------------------------------------------------------------------------------------------>	

	
		<div class="batting" style=" margin-top:40px;margin-left: 165px; border-width: 2px;border-style:solid;height:100%;float: left;">
			
			<table width = "1200px" cellpadding="5" border="3px">
				<tr>
				<td colspan="8"><p style="text-align:center"><b>Batting Summary</b></p></td> 
				</tr>
				<tr align="center">
					<th></th>
					<th>Matches</th>
					<th>Runs</th>
					<th>High Score</th>
					<th>Average</th>
					<th>Strike Rate</th>
					<th>100s</th>
					<th>50s</th>
				</tr>

				<tr align="center">
					<th>Test</th>
					<td ><?php echo $test_matches ?></td>
					<td><?php echo $test_runs ?></td>
					<td><?php echo $test_highscore ?></td>
					<td><?php echo $test_bat_avg ?></td>
					<td><?php echo $test_bat_strike_rate ?></td>
					<td><?php echo $test_100s ?></td>
					<td><?php echo $test_50s ?></td>
				</tr>
				<tr align="center">
					<th>ODI</th>
					<td><?php echo $odi_matches ?></td>
					<td><?php echo $odi_runs ?></td>
					<td><?php echo $odi_highscore ?></td>
					<td><?php echo $odi_bat_avg ?></td>
					<td><?php echo $odi_bat_strike_rate ?></td>
					<td><?php echo $odi_100s ?></td>
					<td><?php echo $odi_50s ?></td>
				</tr>
				<tr align="center">
					<th>T20</th>
					<td><?php echo $t20_matches ?></td>
					<td><?php echo $t20_runs ?></td>
					<td><?php echo $t20_highscore ?></td>
					<td><?php echo $t20_bat_avg ?></td>
					<td><?php echo $t20_bat_strike_rate ?></td>
					<td><?php echo $t20_100s ?></td>
					<td><?php echo $t20_50s ?></td>
				</tr>
			</table>
		</div>
		<br>
		
		
		
		
<!-- ------------------------------------------------------------------------------------------------------------------------------------------------------------------->	

	
		<div class="bowling" style=" margin-top: 200px;margin-left: 165px;; border-width: 2px;border-style:solid;height:100%;float: left;">
			
			<table width="1200px" cellpadding="5" border="3px">
				<tr>
				<td colspan="4"><p style="text-align:center"><b>Bowling Summary</b></p></td> 
				</tr>
				<tr align="center">
					<th></th>
					<th>Wickets</th>
					<th>Economy</th>
					
					<th>5ws</th>
					
				</tr>

				<tr align="center">
					<th>Test</th>
					<td><?php echo $test_wickets ?></td>
					<td><?php echo $test_economy ?></td>
					<td><?php echo $test_5ws ?></td>
					
				</tr>
				<tr align="center">
					<th>ODI</th>
					<td><?php echo $odi_wickets ?></td>
					<td><?php echo $odi_economy ?></td>
					<td><?php echo $odi_5ws ?></td>
					
				</tr>
				<tr align="center">
					<th>T20s</th>
					<td><?php echo $t20_wickets ?></td>
					<td><?php echo $t20_economy ?></td>
					<td><?php echo $t20_5ws ?></td>
					
					
				</tr>
			</table>
		</div>

	</body>
	</html>


