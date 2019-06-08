<?php
	$name = $_POST['name'];
	$jersey_no=$_POST['jersey_no'];
	$tot100s = $_POST['tot100s'];
	$tot50s = $_POST['tot50s'];
	$totwickets = $_POST['totwickets'];
	
	
	$nooftest = $_POST['nooftest'];
	$testruns = $_POST['testruns'];
	$tesths = $_POST['tesths'];
	$testavg = $_POST['testavg'];
	$testsr = $_POST['testsr'];
	$test100s = $_POST['test100s'];
	$test50s = $_POST['test50s'];
	
	$noofodi = $_POST['noofodi'];
	$odiruns = $_POST['odiruns'];
	$odihs = $_POST['odihs'];
	$odiavg = $_POST['odiavg'];
	$odisr = $_POST['odisr'];
	$odi100s = $_POST['odi100s'];
	$odi50s = $_POST['odi50s'];


	$nooft20 = $_POST['nooft20'];
	$t20runs = $_POST['t20runs'];
	$t20hs = $_POST['t20hs'];
	$t20avg = $_POST['t20avg'];
	$t20sr = $_POST['t20sr'];
	$t20100s = $_POST['t20100s'];
	$t2050s = $_POST['t2050s'];
	
	
	$testwickets = $_POST['testwickets'];
	$testeconomy = $_POST['testeconomy'];
	$test5ws = $_POST['test5ws'];
	
	$odiwickets = $_POST['odiwickets'];
	$odieconomy = $_POST['odieconomy'];
	$odi5ws = $_POST['odi5ws'];
	
	$t20wickets = $_POST['t20wickets'];
	$t20economy = $_POST['t20economy'];
	$t205ws = $_POST['t205ws'];
	
	
	$link= mysqli_connect('localhost','root','','project');
	
	$query = "UPDATE `players` SET tot_100s = '$tot100s',tot_50s = '$tot50s', tot_wickets='$totwickets' WHERE name = '$name' AND jersey_no =' $jersey_no' ";
	
	if(mysqli_query($link,$query))
	{
		
		
	$query = "UPDATE `test` SET matches = '$nooftest',runs = '$testruns', highscore='$tesths', bat_avg ='$testavg', bat_strike_rate ='$testsr',100s ='$test100s',   	  	  50s='$test50s',wickets = '$testwickets',economy= '$testeconomy',5ws='$test5ws' WHERE jersey_no =' $jersey_no' ";
		
		{
			if(mysqli_query($link,$query))
			{	
				
				$query = "UPDATE `odi` SET matches = '$noofodi',runs = '$odiruns', highscore='$odihs', bat_avg ='$odiavg', bat_strike_rate ='$odisr',100s 					='$odi100s', 50s='$odi50s',wickets = '$odiwickets',economy= '$odieconomy',5ws='$odi5ws' WHERE jersey_no =' $jersey_no' ";
				if(mysqli_query($link,$query))
				{	
					
					$query = "UPDATE `t20` SET matches = '$nooft20',runs = '$t20runs', highscore='$t20hs', bat_avg ='$t20avg', bat_strike_rate ='$t20sr',100s 						='$t20100s',50s='$t2050s',wickets = '$t20wickets',economy= '$t20economy',5ws='$t205ws' WHERE jersey_no =' $jersey_no' ";
					
					if(mysqli_query($link,$query))
					{
						echo "<script>alert('Updated!');</script>";
					}
				}
			}
		}
		
	}	
	
	
	
	


?>
