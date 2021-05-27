
<div class="tab-pane" id="pills-groups" role="tabpanel" aria-labelledby="pills-groups-tab">
<!-- Start Groups content -->
<div>
<div class="p-4">
<div class="user-chat-nav float-right">
<div  data-toggle="tooltip" data-placement="bottom" title="Create group">
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-link text-decoration-none text-muted font-size-18 py-0" data-toggle="modal" data-target="#addgroup-exampleModal">
        <i class="ri-group-line mr-1"></i>
    </button>
</div>

</div>
<h4 class="mb-4"><?php echo $_SESSION['name']; ?></h4>

<!-- Start add group Modal -->
<div class="modal fade" id="addgroup-exampleModal" tabindex="-1" role="dialog" aria-labelledby="addgroup-exampleModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title font-size-16" id="addgroup-exampleModalLabel">Create New Group</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
        <div class="modal-body p-4">

            <form  action="../controller/group_controller.php" method="POST">
           <!--  <form method="POST"  action="user/group_controller.php"> -->

                <div class="form-group mb-4">
                    <label for="addgroupname-input">Group Admin</label>
                    <input type="text" class="form-control" id="addgroupname-input" placeholder="Enter Group Name" name="group_name">
                </div>


                    <input type="text" class="form-control" value="<?php echo $_SESSION['id']; ?>" id="owner_id-input" name="owner_id" hidden>
                
               
                        <div class="modal-footer">
                    <button type="submit" class="btn btn-link" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create Groups</button>
                </div>
            
            </form>




        </div>
        
    </div>
</div>
</div>
<!-- End add group Modal -->






<!-- end search-box -->
</div>
<!-- Start chat-group-list -->
<?php

include('group_list.php');

?>
<!-- End chat-group-list -->
</div>
<!-- End Groups content -->
</div>