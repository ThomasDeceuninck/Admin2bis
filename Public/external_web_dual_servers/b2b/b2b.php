<html>
	<head></head>
	<body>
		<form method="post" action="<?=$_SERVER['PHP_SELF'];?>">
			Enter name:-<input type="text" name="name"/>
			Enter price:-<input type="text" name="price"/>
			</br>
			<input type="submit" name="newItem"/>
		</form>
		<?php 
		
		$servername = "172.20.3.4";//"172.20.3.4"
		$username = "userb2b";
		$password = "Zh0qtDbBRiKsmX4V8dES";
		$dbname = "b2b";
		$conn = new mysqli($servername, $username, $password, $dbname);
		//$conn = new mysqli($servername, 'root', '', $dbname);
		

		if ($conn->connect_error)
		{
				die("Connection failed: " . $conn->connect_error);
		}
		else
		{
			if(isset($_POST['newItem']))
			{
				$name = $_POST['name'];
				$price = $_POST['price'];
				$sql = "INSERT INTO inventory VALUES ('', '$name', '$price')";
				$result = $conn->query($sql);
				if ($result === TRUE)				
				{
					
				}		
			}
			$sql = "SELECT * FROM inventory";
			$result = $conn->query($sql);
			if ($result->num_rows > 0)
			{
				while($row = $result->fetch_assoc())
				{
					echo " - Name: " . $row["name"]. " Price : " . $row["price"]. "<br>";
					//echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Price : " . $row["price"]. "<br>";
				}
			}
			$conn->close();
		}
		?>
	</body>
</html>
