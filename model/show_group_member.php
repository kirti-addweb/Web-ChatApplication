	<?php

include_once('db_connect.php');
class membermodel extends connection
{
	
	public $conn;

	public function select3()
	{
		$g_id=$_GET['g_id'];

	/*$sql = "SELECT * FROM people,address,cars WHERE
people.address_id = address.address_id AND
people.cars_id = cars.cars_id"*/

		$sql = "SELECT * FROM groups,group_member WHERE groups.id = group_member.g_id AND group_member.g_id = group_member.m_id ";
		echo $sql;
		
	//$sql=  "SELECT * FROM groups,group_member WHERE id = g_id AND group_member.g_id = g_id";

	
		
		$con = new connection();
		$conn= $con->connectdb();


		$select=$conn->prepare($sql);

		$select->execute();
		$res=$select->get_result();


		return $res;
	}
}

/* $user=new membermodel();
 $data=$user->select3();*/


?>