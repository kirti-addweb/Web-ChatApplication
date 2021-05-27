<?php

class addcontact_controller
{
	public function model()
	{
		$this->dta=new membermodel();
//return $this->dta;
	}
	function add_member()
	{
			//echo "dsfdsf";
		if($_SERVER["REQUEST_URI"]=="/ChatApp/view/admin/addcontact.php")
			include_once('../../model/addcontact_model.php');
		else
			include_once('../model/addcontact_model.php');
		self::model();
		$ini=$this->dta->add_member();
		return $ini;
	}

}
$e = new addcontact_controller();
$data=$e->add_member();


header("location:../view/index.php");


?>