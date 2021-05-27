<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

include_once('db_connect.php');

class membermodel extends connection
{
public $conn;

public function __construct()
{
$con = new parent();
$this->conn = $con->connectdb();

}

public function add_member()
{
	
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$image="https://cdn2.iconfinder.com/data/icons/flatfaces-everyday-people-square/128/beard_male_man_face_avatar-512.png";
$role=$_POST['role'];
//$password = md5($password);

require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'kirti.addweb@gmail.com';
$mail->Password = 'ADDwb#2020212';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->From = $email;
$mail->FromName = 'kirti keshwala';
$mail->addAddress($email);


$mail->isHTML(true);

$mail->Subject = 'Welcome, AddWeb Solution Pvt.Ltd.';
$mail->Body = 'Login Details'.'<br>'.'Email'.':'.' '.$email.'<br>'.'Password'.':'.' '.$password;
// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
// var_dump($mail);
if(!$mail->send()) {
echo 'Message could not be sent.';
// var_dump($mail);
echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
echo 'Message has been sent';
}

$in=$this->conn->query("INSERT INTO addcontact (name,email,password,image,role) VALUES ('$name','$email','$password','$image','$role')");

 return $in;
 //var_dump($in);

 //$rs1=mysqli_query($conn,$in);

	}
}
?>