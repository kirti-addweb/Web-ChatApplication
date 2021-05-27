<?php 
class groups
{
	
	public function model()
	{
		$this->dta=new group();
			//return $this->dta;
	}

	public function add_group()
	{
		$id=$_POST['owner_id'];

		if($_SERVER["REQUEST_URI"] == "/ChatApp/view/user/group_tab.php")
		{
			include_once('../model/group_model.php');
		}
		else
		{
			include_once('../model/group_model.php');
			self::model();
			$ini=$this->dta->holiday_add($id);
			return $ini;
		}
	}
}

$h= new groups();
$data=$h->add_group();

?>