<!DOCTYPE html>
<html>
<head>
	<title>BCCI</title>
	<style>
	body
	{
		background: url(backgroundimage.jpg);
		
		background-size:cover;
		
		
	}
	</style>
</head>
<body> 
<h1 align="center" style="color:white;">Indian Cricket Team </h1><br>
<div align="center">
<img align="middle" src="bcci-tues-oct_d.jpeg" height="250px" width="350px" style="  opacity: 0.7;" >
</div><br><br>


<!--             BCCI INFORMATION        -->

<blockquote style="color:white;font-size:20px">
The Board of Control for Cricket in India (BCCI) is the national governing body for cricket in India.[1] The board was formed in December 1928 as a society, registered under the Tamil Nadu Societies Registration Act. It is a consortium of state cricket associations and the state associations select their representatives who in turn elect the BCCI chief. 
</blockquote>


		
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->	


<!--                PLAYER SERACH BY NAME                  -->

<div style="background-color:gray;margin-left:35%;margin-top:100px;font-size:20px;border-width: 5	px;border-color: white; width:28%;border-style:solid;height:300px;"">
	<table style="border-type:solid;" cellspacing="10px" cellpadding="30px" >
	<caption style="color:white">Search By Name</caption>
		<form method="POST" action="second.php">
			<br><br>
			<tr>
			<td style="color:white;">Name :</td> <td><input type="text" name="search"></td>
			</tr>
			
			<tr>
			<td colspan="5"><input style=";width:120px;background-color: #4CAF50; color: white; font-size: 19px;padding:7px;margin-left:169px;"type="submit" value="Search" ></td>
			</tr>

		</form>
	</table> 


</div>



		
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->	




<!--PLAYER SERACH BY FILTERS-->

<br><br>
<div style="background-color:gray;margin-left:35%;margin-top:100px;font-size:20px;border-width: 5px;border-color: white; width:28%;border-style:solid;height:500px;">
	
		<p style="color:white;margin-top:8%;margin-left:32%;">Search By Filters</p>
	<button style="margin-top:50px;margin-left:200px;background-color: #4CAF50; color: white; font-size: 19px;" onClick="fun100()">Total 100s</button>

	<form id="hide100" hidden method="POST" action = "filtersearch.php" style="margin-top:25px"> 
	 	<input type="text" name="min100s" placeholder="Minimum 100s"> 
	 	<input type="text" name="max100s" placeholder="Maximum 100s">
	 	<input type="submit" value="Search"> 
	 	
	</form>

<br><br>

	<button style="margin-top:50px;margin-left:200px;background-color: #4CAF50; color: white; font-size: 19px;width:120px" onClick="fun50()">Total 50s</button>
	
	<form id="hide50" hidden method="POST" action = "filtersearch.php" style="margin-top:25px"> 
	 	<input type="text" name="min50s" placeholder="Minimum 50s"> 
	 	<input type="text" name="max50s" placeholder="Maximum 50s">
	 	<input type="submit" value="Search"> 
	 	
	</form>

<br><br>

	<button style="margin-top:50px;margin-left:190px;background-color: #4CAF50; color: white; font-size: 19px;width:130px;" onClick="funwickets()">Total Wickets</button>

	<form id="hidewickets" hidden method="POST" action = "filtersearch.php" style="margin-top:25px"> 
	 	<input type="text" name="minwickets" placeholder="Minimum Wickets"> 
	 	<input type="text" name="maxwickets" placeholder="Maximum Wickets">
	 	<input type="submit" value="Search"> 
	 	
	</form>
</div>



		
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->	



<!--DISPLAY THE HIDDEN FORMS FOR FILTERING-->
<script type="text/javascript">
	function fun100()
	{	
		document.getElementById("hide100").style.display="block";
		
	
			
	}
	function fun50()
	{	
		document.getElementById("hide50").style.display="block";
		
			
			
	}
	function funwickets()
	{	
		document.getElementById("hidewickets").style.display="block";
		
			
			
	}
	
	
</script>

<br><br>
<hr style="color:red">



		
<!----------------------------------------------------------------------------------------------------------------------------------------------------------->			
<!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->	

<!--ADMIN LOGIN -->



<div style="background-color:gray;margin-left:34%;margin-top:100px;font-size:20px;border-width: 5	px;border-color: white; width:30%;border-style:solid;height:350px;">
	<table style="border-type:solid;" cellspacing="10px" cellpadding="20px">
		<br><br>
			<caption style="color:white">ADMIN LOGIN</caption>

		<form method="POST" action="adminlogin.php">
			
			<tr>
			<td>UserName </td><td><input type="text" name="username"></td>
			</tr>
			<tr>
			<td>Password </td><td><input type="password" name="password"></td>
			</tr>
			<tr>
			<td></td>
			<td><input style="padding:7px;margin-left:0px;" type="submit" value="Login"></td>
			</tr>
		</form>
	</table>
</div>




</body>


</html>
