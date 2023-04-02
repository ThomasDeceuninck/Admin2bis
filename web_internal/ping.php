<html>
	<head></head>
	<body>
		<form action="ping.php" method="post">
			Enter IP:-<input type="text" name="ip"/>
			Enter timeout in sec:-<input type="text" name="timeout"/>
			Enter number of ping:-<input type="text" name="packet"/>
			</br>
			<input type="submit" value="PING IP" name="ping"/>
		</form>
	</body>
</html>
<?php

if(isset($_POST['ping']))
{
	$ip=$_POST['ip'];
	$timeout = $_POST['timeout'];
	$packet = $_POST['packet'];
	$output=null;
	$retval=null;
	exec("ping $ip -c $packet -W $timeout \n", $output, $retval);

	foreach($output as $x => $val) 
	{
	  //echo "$x = $val<br>";
	  echo "$val<br>";
	}
}
?>