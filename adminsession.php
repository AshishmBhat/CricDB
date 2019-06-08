<?php
	
	session_start();
	if(!isset($_SESSION['username']))
	{
		
		header('location: index.php');
	}
	

?>
<html>
<head>

<style>
	body
	{
		background: url(backgroundimage1.jpg);
		
		background-size:cover;
		color:white;
		
		
	}
	</style>
</style>
</head>
<body>
<h1 style="font-family:Times New Roman;margin-left:40%;margin-top:5%;"><i><u>Update Information<u></i></h1>
<div class = "first "style="border-width:3px; width:400px;border-style:solid;border-color:white;height:850px;float: left;margin-left: 700px;margin-top:60px;" >
			
			<form method ="POST" action ="adminupdate.php">
			<table height ="800px"cellpadding="5" cellspacing="15">
				

					<tr >
						<th  colspan="2">Personal Information</th>
					</tr>
					
					
					
					<tr>
						<td>Name</td>
						<td><input type= "text" name = "name"> </td>
					</tr>
					
					
					
					<tr>
						<td>Jersey </td>
						<td><input type="text" name= "jersey_no"></td>
					</tr>
					
					
					
					
					
					<tr>
						<td>100s</td>
						<td><input type= "text" name = "tot100s"></td>
					</tr>
					
					
					
					<tr>
						<td>50s</td>
						<td><input type= "text" name = "tot50s"></td>
					</tr>
					
					
					
					<tr>
						<td>Wickets</td>
						<td><input type= "text" name = "totwickets"></td>
					</tr>
					

			</table>
			
			
			
			
		</div>
		
		<div class="batting" style=" margin-top: 200px;margin-left: 100px;margin-right: 100px; border-width: 2px;border-color:white;border-style:solid;height:230px;float: left;">
				
			<table width = "1000px" cellpadding="5" border="1px" height="200px">
				<tr>
				<td colspan="8"><p style="text-align:center">Batting Summary</p></td> 
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
					<td ><input type= "text" name = "nooftest"></td>
					<td><input type= "text" name = "testruns"></td>
					<td><input type= "text" name = "tesths"></td>
					<td><input type= "text" name = "testavg"></td>
					<td><input type= "text" name = "testsr"></td>
					<td><input type= "text" name = "test100s"></td>
					<td><input type= "text" name = "test50s"></td>
				</tr>
				<tr align="center">
					<th>ODI</th>
					<td><input type= "text" name = "noofodi"></td>
					<td><input type= "text" name = "odiruns"></td>
					<td><input type= "text" name = "odihs"></td>
					<td><input type= "text" name = "odiavg"></td>
					<td><input type= "text" name = "odisr"></td>
					<td><input type= "text" name = "odi100s"></td>
					<td><input type= "text" name = "odi50s"></td>
				</tr>
				<tr align="center">
					<th>T20</th>
					<td><input type= "text" name = "nooft20"></td>
					<td><input type= "text" name = "t20runs"></td>
					<td><input type= "text" name = "t20hs"></td>
					<td><input type= "text" name = "t20avg"></td>
					<td><input type= "text" name = "t20sr"></td>
					<td><input type= "text" name = "t20100s"></td>
					<td><input type= "text" name = "t2050s"></td>
				</tr>
				
			</table>
			
		</div>
		<br>
		<div class="bowling" style=" margin-top:200px;margin-left:300px; border-width: 2px;border-style:solid;height:230px;float: left;">
				
			<table width="1000px" cellpadding="5" border="1px" height="200px">
				<tr>
				<td colspan="4"><p style="text-align:center">Bowling Summary</p></td> 
				</tr>
				<tr align="center">
					<th></th>
					<th>Wickets</th>
					<th>Economy</th>
					
					<th>5ws</th>
					
				</tr>

				<tr align="center">
					<th>Test</th>
					<td><input type= "text" name = "testwickets"></td>
					<td><input type= "text" name = "testeconomy"></td>
					<td><input type= "text" name = "test5ws"></td>
					
				</tr>
				<tr align="center">
					<th>ODI</th>
					<td><input type= "text" name = "odiwickets"></td>
					<td><input type= "text" name = "odieconomy"></td>
					<td><input type= "text" name = "odi5ws"></td>
					
				</tr>
				<tr align="center">
					<th>T20s</th>
					<td><input type= "text" name = "t20wickets"></td>
					<td><input type= "text" name = "t20economy"></td>
					<td><input type= "text" name = "t205ws"></td>
					
					
				</tr>
			
			</table>
			<p style="margin-top:100px;margin-left:470px;margin-bottom:100px;"><input type="Submit" value="SUBMIT"></p>
		
		
		</form>	
		</div>
		
		
<!-- ----------------------------------------------------------------------------------------------------------------->		
		
		
		<div style="float:left;margin-top:20%;margin-left:550px;border:2px;border-style:solid;border-color:white;">
		
		<table height=500px  width = 450pxcellpadding="5px" >
		<tr><td colspan="2"><h1 style="font-size:40px;font-family:Times New Roman;margin-left:23%;margin-top:3%;"><i><u>Delete a Player<u></i></h1></td></tr>
			<form method="POST" action="admindelete.php">
				<tr>
				<td>Name :</td> <td><input type="text" name = "name"></td>
				</tr>
				<tr>
				<td>Jersey Number :</td><td> <input type="text" name = "jersey_no"></td>
				</tr>
				<tr>
				<td colspan="2"><input style="margin-top:20px;margin-left:150px"type = "submit" value="Delete"></td>
				</tr>
			</form>
		</table>
		
		</div>
		<div style="float:left;margin-top:60%;">
		
		</div>
		
		
		
		
</body>
</html>

