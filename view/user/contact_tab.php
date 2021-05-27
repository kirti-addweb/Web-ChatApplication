<div class="tab-pane fade show active" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
  <!-- Start Contact content -->
  <div>
    <div class="p-4">
      <div class="media align-items-center">
        <div class="mb-4 profile-user">
          <form enctype="multipart/form-data" action="" method=""> 
            <?php

            require_once "../model/db_connect.php";
            $id=$_SESSION['id'];

            $qry="SELECT * FROM addcontact WHERE id=$id";

            $con = new connection();
            $conn= $con->connectdb();

            $rs=mysqli_query($conn,$qry);
            $row=mysqli_fetch_assoc($rs);

            ?>

          </form>
        </div>
      </div>
      <!-- Start Add contact Modal -->

      <div class="text-center border-bottom p-4">
        <div class="mb-4 profile-user" >
          <img src="<?php echo $row['image']?>" class="rounded-circle avatar-lg img-thumbnail" alt="">
          <div class="dropdown">
            <a href="#" class="text-muted dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <button type="button" class="btn bg-light avatar-xs p-0 rounded-circle profile-photo-edit"> <i class="ri-pencil-fill"></i> </button>
            </a>
            <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="profilepic.php">Change Profile</a> <a class="dropdown-item" href="password_change.php">Change Password </a>
            </div>
          </div>
        </div>

        <h5 class="font-size-16 mb-1 text-truncate"><?php echo $_SESSION['name']; ?></h5>
        <div class="dropdown d-inline-block mb-1">
          <div class="dropdown-menu">
            <div class="dropdown-menu dropdown-menu-right"> <a class="dropdown-item" href="profilepic.php">Change Profile</a> <a class="dropdown-item" href="password_change.php">Change Password </a>
            </div>
          </div>
        </div>
      </div>
      <!-- End Add contact Modal -->
      <div class="search-box chat-search-box">
        <div class="input-group bg-light  input-group-lg rounded-lg" style="display:none;">
          <div class="input-group-prepend">
            <button class="btn btn-link text-decoration-none text-muted pr-1" type="button"> <i class="ri-search-line search-icon font-size-18"></i> </button>
          </div>

          <input type="text" class="form-control bg-light " placeholder="Search users.." id="search">
        </div>

      </div>
      <!-- End search-box -->
    </div>
    <!-- end p-4 -->
    <!-- Start contact lists -->
    <div class="p-4 chat-message-list chat-group-list" data-simplebar>
      <?php  
      include_once('../model/viewcontact_model.php');

      $sql="SELECT * FROM addcontact";
      ?>
      <div id="user_list">

        <!-- abc -->

      </div>
      <!-- end contact list A -->
    </div>
    <!-- end contact lists -->
  </div>
  <!-- Start Contact content -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">

    $( document ).ready(function() { //set up refresh timer on page load
      refreshMessages1();
      var refreshTimer = setInterval(function(){refreshMessages1()},1000);
        //creates timer to request every 5 
      });

    function refreshMessages1(){
      var s=$("#search").val();

      if (s== '') 
      {
        $.ajax({url: "user/user_list.php", success: function(result){
          $("#user_list").html(result);
        }});
      }
    }
/*$(".chatting_id").on("click", function(){
  alert("The paragraph was clicked.");
});

$( ".chatting_id" ).click(function() {
  alert( "Handler" );
});*/




</script>