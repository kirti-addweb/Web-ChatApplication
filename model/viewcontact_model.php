	<?php

include_once('db_connect.php');
class usermodel extends connection
{
	
	public $conn;

	public function select1()
	{
		

		$sql="SELECT * FROM addcontact";
		
		$con = new connection();
		$conn= $con->connectdb();


		$select=$conn->prepare($sql);

		$select->execute();
		$res=$select->get_result();


		return $res;
	}
	public function search()
	{
		echo $s;
	}

}



?>