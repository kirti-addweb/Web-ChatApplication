<?php

class connection
{
	public $conn;

	function connectdb()
	{
		$this->conn = new mysqli('localhost','vismay','root','chatapp');
			if(!$this->conn)
			{
				echo "not";
			}
			return $this->conn;
	}
}

?>