<?php
// include_once('../../controller/addcontact_controller.php');
?>


<div class="modal fade " id="addContact-exampleModal" tabindex="-1" role="dialog" aria-labelledby="addContact-exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title font-size-16" id="addContact-exampleModalLabel">Add Contact</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body p-4">
<form action="../controller/addcontact_controller.php" method="POST">
<div class="form-group mb-4">
<label for="addcontactemail-input">Name</label>
<input type="text" class="form-control" id="addcontactname-input" placeholder="Enter name" name="name">
</div>
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
<option value="user">User</option>
<option value="admin">Admin</option>
</select>

</div>
<!-- <div class="form-group">
<label for="addcontact-invitemessage-input">Invatation Message</label>
<textarea class="form-control" id="addcontact-invitemessage-input" rows="3" placeholder="Enter Message"></textarea>
</div> -->
<div class="modal-footer">
<button type="button" class="btn btn-link" data-dismiss="modal">close</button>
<input type="submit" name="submit" class="btn btn-success">
</div>
</form>
</div>

</div>
</div>
</div>
