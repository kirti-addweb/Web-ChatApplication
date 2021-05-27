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
                <h5 class="modal-title font-size-16" id="addContact-exampleModalLabel">Profile Update</h5>
            
            </div>
            <div class="modal-body p-4">
                <form action="../controller/image_controller.php" method="POST" enctype="multipart/form-data">
        
                    <div class="form-group mb-4">
                        <label for="addcontactemail-input">Image</label>
                        <input type="file" class="form-control" id="fileToUpload" name="fileToUpload">
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

<script>
$(document).ready(function() {
$('#insert').click(function(){
    var image_name = $('#image').val();
    if(image_name == '')
    {
        alert("select image");
        return false;
    }
    else
    {
        var extension = $('#image').val().split('.').pop().toLowerCase();
        if (jQuery.inArray(extension,['gif','png','jpg','jpeg'])== -1)
        {
            alert('Invalide Image File');
            $('#image').val('');
            return false;
        }
    }


});
});
</script>
