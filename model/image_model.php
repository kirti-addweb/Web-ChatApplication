<?php

include('db_connect.php');

class imagemodel extends connection
{
public $conn;

public function __construct()
{
$dbcon = new parent();
$this->conn = $dbcon->connectdb();


}

public function update_image()
{
 session_start();
$i=$_SESSION['id'];

$target_dir = "../upload/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
if($check !== false) {
echo "File is an image - " . $check["mime"] . ".";
$uploadOk = 1;
} else {
echo "File is not an image.";
$uploadOk = 0;
}
}

if ($uploadOk == 0) {
echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
} else {
echo "Sorry, there was an error uploading your file.";
}
}   
//echo $target_file;
$data=$this->conn->query("UPDATE addcontact SET image='".$target_file."' WHERE id='$i'");

//return $data;
	  if($data)
				{
					header("location:../view/index.php");
					exit();
				}
				else
				{
					header("location:../view/index.php");
				}

}

// $result = mysqli_query($db, "SELECT * FROM images");


















//$image="https://th.bing.com/th/id/OIP.Lp2-S9KPc-rsq7oChlCLXAHaHa?w=181&h=181&c=7&o=5&dpr=1.25&pid=1.7";
//$image=$_POST['image'];
//echo $i;
// $data=$this->conn->query("UPDATE member_details SET image='".$image."' WHERE id='$i'");

// return $data;

//var_dump($data);





}

?>