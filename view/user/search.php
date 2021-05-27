<?php
session_start();
$_SESSION["serachtext"]=$_POST['s'];
$name =$_SESSION["serachtext"];
$conn = mysqli_connect("localhost","vismay","root","chatapp");

if($_SESSION["serachtext"] == null)
{
	$query = "SELECT * FROM addcontact WHERE addcontact";

}
else
{
	
	$query = "SELECT * FROM addcontact WHERE name LIKE '%$name%'";
}

//$result = $conn->query($query);
 $result = mysqli_query($conn,$query);

 





?> 