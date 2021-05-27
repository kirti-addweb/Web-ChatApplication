	<?php

include_once('db_connect.php');
class groupmodel extends connection
{
	
	public $conn;

	public function select2()
	{
		$id=$_SESSION['id'];

		$sql="SELECT * FROM group_member where m_id=$id";
		
		$con = new connection();
		$conn= $con->connectdb();


		$select=$conn->prepare($sql);

		$select->execute();
		$res=$select->get_result();


		return $res;
	}
}



?>