<?php

$servername = "172.17.0.2";//IP de merde du serveur DB
$username = "userinternal";
$password = "9Y8WlgYjPzZznK5SMn2Z";
$dbname = "internal";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
	die("Connection failed: " . $conn->connect_error);
}
else
{
	$sql = "SELECT * FROM employee";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) 
	{
		while($row = $result->fetch_assoc()) 
		{
			echo " - Name: " . $row["name"]. " Surname : " . $row["surname"]. "Email : " . $row["email"] . "<br>";
			//echo "id: " . $row["id"]. " - Name: " . $row["name"]. " Price : " . $row["price"]. "<br>";
		}
	}
	$conn->close();
}
?>