<?php

//include_once('../model/db_connect.php');
echo $conn = new mysqli('localhost','vismay','root','chatapp') or die("can't connect to database");
session_start();

$q = " UPDATE addcontact set `isactive`='0' where id=".$_SESSION['id'];
 if(mysqli_query($conn,$q))
			{

				session_destroy();
				header("Location:login.php");
				exit();
			}

?>