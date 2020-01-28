<?php include('config.php');?>
<title>Artform Platform</title>


<?
	$sql = "SELECT name,email,num,msg FROM message";
	$result = $conn->query($sql);

	echo "<br>";
	echo "<table border='2'>";
	echo "<tr> <th>Name</th><th>Email</th><th>Phone</th><th>Message</th></tr>";
	echo "<tr>";
	if ($result->num_rows > 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>". $row["name"]."</td>";
			echo "<td>". $row["email"]."</td>";
			echo "<td>". $row["num"]."</td>";
			echo "<td>". $row["msg"]."</td></tr>";
		}
	}

	echo "</table>";
?>
