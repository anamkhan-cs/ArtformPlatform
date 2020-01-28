
<!DOCTYPE html>
<style>
table {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 90%;
    margin-left: 70px;
    margin-top: 70px;
}

 td, th {
    border: 1px solid #ddd;
    padding: 8px;
}
 tr:nth-child(even){background-color: #f2f2f2;}

	tr:hover {background-color: #ddd;}

th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
button[type="submit"] {
  cursor: pointer;
  width: 90%;
  border: none;
  background: #4CAF50;
  color: #FFF;
  margin-left:70px;
  padding: 10px;
  font-size: 15px;
}

a:link {
    text-decoration: none;
}


button[type="submit"]:hover {
  background: #43A047;
  -webkit-transition: background 0.3s ease-in-out;
  -moz-transition: background 0.3s ease-in-out;
  transition: background-color 0.3s ease-in-out;
}

button[type="submit"]:active {
  box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.5);
}
</style>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "artformplatform";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	$sql = "SELECT * FROM message";
	$result = $conn->query($sql);

	//error_reporting(1);
	//if (strlen($_GET["name"]) > 0){
	//	$todel=$_GET['name'];	
	//	$sql2 = "delete from message where name='$todel' ;";
	//	$result = $conn->query($sql2);

	//}
	//$sql2 = "SELECT * FROM message where name='".$_SESSION['name']."' ";
	//$result2 = mysqli_query($conn, $sql2);

	//$uq=mysql_query("select * from message where name='".$_SESSION['name']."' ");
	//$u_row=mysql_fetch_array($uq);

	if(isset($_REQUEST['delete']))
	{
		$sql_s =" DELETE FROM `message` WHERE name='Antonio Rizalde V Veloso'" ;
		$result_s = mysqli_query($conn,$sql_s) ;
		if($result_s == true)
		{
			echo '<script language="javascript">';
			echo 'alert("Deleted successfully")';
			echo '</script>';
		}
	}	
	echo "<br>";
	echo "<table border='2'>";
	echo "<tr> <th >Name</th><th>Email</th><th>Phone</th><th>Message</th><th>Delete</th></tr>";
	echo "<tr>";
	if ($result->num_rows > 0)
	{
		while($row=$result->fetch_assoc())
		{
			echo "<tr>";
			echo "<td>". $row["name"]."</td>";
			echo "<td>". $row["email"]."</td>";
			echo "<td>". $row["num"]."</td>";
			echo "<td>". $row["msg"]."</td>";
			//echo "<td><a href=test.php?name=".$row["name"].">Delete</a></td></tr>";
			echo "<td>  <form method='post'> <input type='submit' name='delete' value='Delete'> <input type='hidden' name='vin' value=".$row["name"]."/></form></td></tr>";
		}
	}


	echo "</table>";

?>
        <button type="submit"><a href="logout.php" class="btn btn-danger=">Sign Out of Your Account</a></button>
<br>
<br>
<br>
<br>

</body>

<?php include "navbar.php"; ?>

