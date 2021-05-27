<?php

class u_profile
{

  public function model()
  {
    $this->dta=new imagemodel();

  }

  public function update_image()
  {
    if($_SERVER["REQUEST_URI"]=="/ChatApp/view/profilepic.php")
      include_once('../../model/image_model.php');
    else
      include_once('../model/image_model.php');
    self::model();
    $ini=$this->dta->update_image();
    return $ini;
  }


}

$h= new u_profile();
$data=$h->update_image();

if(isset($_GET['mod'])=='update')
{
  $del=$h->update_image();
//header("location:../view/employee/list_holiday.php");

}
?>