<!doctype html>
<html lang="en">


<head>


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
                <h5 class="modal-title font-size-16" id="addContact-exampleModalLabel">Login</h5>
            
            </div>
            <div class="modal-body p-4">
                <form action="../controller/login.php" method="POST">

        
                    <div class="form-group mb-4">
                        <label for="addcontactemail-input">Email</label>
                        <input type="email" class="form-control" id="addcontactemail-input" placeholder="Enter Email" name="email">
                    </div>

                    <div class="form-group mb-4">
                        <label for="addcontactemail-input">Password</label>
                        <input type="password" class="form-control" id="addcontactpassword-input" placeholder="Enter password" name="password">
                    </div>

                     <div class="form-group mb-4">
                 <label for="addcontactemail-input">Select</label>
                  <select class="form-control" id="addcontactadmin-input" name="role">
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                  </select>
                       
                    </div> 
        
        
                    <div class="modal-footer">
                   
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
