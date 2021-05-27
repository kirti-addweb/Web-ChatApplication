<?php
session_start();
$_SESSION['id'];
$conn = mysqli_connect("localhost", "vismay", "root", "chatapp") or die("Connection Error: " . mysqli_error($conn));

if (count($_POST) > 0) {
$result = mysqli_query($conn, "SELECT *from addcontact WHERE id='" . $_SESSION["id"] . "'");
//print_r($result);
$row = mysqli_fetch_array($result);
if ($_POST["currentPassword"] == $row["password"]) {
mysqli_query($conn, "UPDATE addcontact set password='" . $_POST["newPassword"] . "' WHERE id='" . $_SESSION["id"] . "'");
$message = "Password Changed";
} else
$message = "Current Password is not correct";
}
?>
<html lang="en">


<head>

<script>
function validatePassword() {
var currentPassword,newPassword,confirmPassword,output = true;

currentPassword = document.frmChange.currentPassword;
newPassword = document.frmChange.newPassword;
confirmPassword = document.frmChange.confirmPassword;

if(!currentPassword.value) {
currentPassword.focus();
document.getElementById("currentPassword").innerHTML = "required";
output = false;
}
else if(!newPassword.value) {
newPassword.focus();
document.getElementById("newPassword").innerHTML = "required";
output = false;
}
else if(!confirmPassword.value) {
confirmPassword.focus();
document.getElementById("confirmPassword").innerHTML = "required";
output = false;
}
if(newPassword.value != confirmPassword.value) {
newPassword.value="";
confirmPassword.value="";
newPassword.focus();
document.getElementById("confirmPassword").innerHTML = "not same";
output = false;
}
return output;
}
</script>
<?php 
include('admin_include/head.php');
//include_once('../controller/login_controller.php');
?>


</head>

<body>

<div class="p-5">

<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-size-16" id="addContact-exampleModalLabel">Change Password</h5>
                
                <?php
                if (isset($message)) {
                    ?>

                    <label><?=$message?></label>
                    <?php
                }
                ?>
            
            </div>
            <div class="modal-body p-4">
               <form name="frmChange" method="post" action="password_change.php"
onSubmit="return validatePassword()">

        
                    <div class="form-group mb-4">
                        <label for="addcontactemail-input">Current Password</label>
                        <input type="password" class="form-control" id="addcontactemail-input" placeholder="Enter Current Password" name="currentPassword">
                    </div>

                    <div class="form-group mb-4">
                        <label for="addcontactemail-input">New Password</label>
                        <input type="password" class="form-control" id="newPassword" placeholder="Enter password" name="newPassword">
                    </div>

                    <div class="form-group mb-4">
                        <label for="addcontactemail-input">Conform Password</label>
                        <input type="password" class="form-control" id="confirmPassword" placeholder="Enter Conform password" name="confirmPassword">
                    </div>
             
        
        
                    <div class="modal-footer">
                        <a href="index.php"><button  type="button">back</button></a>
                   
                       <input type="submit" name="submit">
                    </div>
                </form>
            </div>
            
        </div>
    </div>

</div>


<?php include('admin_include/script.php');
?>


</body>
</html>
<!-- <script>
function goBack() {
  window.history.back();
}
</script> -->