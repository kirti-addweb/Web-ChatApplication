<head>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript">
$( document ).ready(function() { //set up refresh timer on page load
var refreshTimer = setInterval(function(){refreshMessages()},1000); //creates timer to request every 5 seconds
    });
function refreshMessages(){
$.ajax({url: "getMessages.php", success: function(result){
$("#div1").html(result);
     }
  });
}
</script>  
<?php

    include('user_include/head.php');
    if($_SERVER['REQUEST_URI']!="/ChatApp/view/index.php")
    session_start();
   if(!isset($_SESSION['Email']))
                    {
                         header("location: login.php");
                    }
?>
</head>
<body>
<div class="layout-wrapper d-lg-flex">
<!-- Start left sidebar-menu -->
<?php
include('user_include/sidemenu.php');
?>
<!-- end left sidebar-menu -->
<!-- start chat-leftsidebar -->
<div class="chat-leftsidebar mr-lg-1">
<div class="tab-content">
<!-- Start Profile tab-pane -->
<!-- End Profile tab-pane -->
<!-- Start chats tab-pane -->
<!-- End chats tab-pane -->
<!-- Start groups tab-pane -->
<?php
include('user/group_tab.php');
?>
<!-- End groups tab-pane -->
<!-- Start contacts tab-pane -->
<?php
include('user/contact_tab.php');
?>
<!-- End contacts tab-pane -->
<!-- Start settings tab-pane -->
<!-- End settings tab-pane -->
</div>
<!-- end tab content -->
</div>
<!-- end chat-leftsidebar -->
<!-- Start User chat -->
<div class="user-chat w-100">
<div class="d-lg-flex">

<!-- start chat conversation section -->

<div class="w-100">
<div class="p-3 p-lg-4 border-bottom">
<div class="row align-items-center">
  <div class="col-sm-4 col-8">
      <div class="media align-items-center">
          <div class="d-block d-lg-none mr-2">
              <a href="javascript: void(0);" class="user-chat-remove text-muted font-size-16 p-2"><i class="ri-arrow-left-s-line"></i></a>
          </div>

         
          <?php 
                  require_once "../model/db_connect.php";

                  $rid=$_GET['rid'];
                  $qry="SELECT * FROM addcontact WHERE id=$rid";

                  $con = new connection();
                  $conn= $con->connectdb();

                  $rs=mysqli_query($conn,$qry);
                  $row=mysqli_fetch_assoc($rs);

                  $name=$row['name'];
          ?>
           <div class="mr-3">
              <img src="<?php echo $row['image']; ?>" class="rounded-circle avatar-xs" alt="">
          </div>
          <div class="media-body overflow-hidden">
              <h5 class="font-size-16 mb-0 text-truncate"><a href="index.php" class="text-reset user-profile-show"><?php echo $name; ?></a>
              <?php
           
               $sql = "SELECT id, isactive FROM addcontact WHERE id = '".$_GET['rid']." '
                          AND isactive = '1'";
                  
                $result=mysqli_query($conn,$sql);                 
                $rowcount=mysqli_num_rows($result);

             if($rowcount>0)
                  {
              ?>

               <i class="ri-record-circle-fill font-size-10 text-success d-inline-block ml-1"></i>

            <?php
                  }
                  else
                  {
             ?>

               <i class="ri-record-circle-fill font-size-10 text-danger d-inline-block ml-1"></i>

            <?php
                 }
            ?>

           </h5>
          </div>
      </div>
  </div>
  <div class="col-sm-8 col-4">
      <ul class="list-inline user-chat-nav text-right mb-0">
          
          <li class="list-inline-item">
              <div class="dropdown">
                  <!-- <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="ri-search-line"></i>
                  </button> -->
                  <div class="dropdown-menu p-0 dropdown-menu-right dropdown-menu-md">
                      <div class="search-box p-2">
                          <input type="text" class="form-control bg-light border-0" placeholder="Search..">
                      </div>
                  </div>
              </div>
          </li>  
      </ul>
  </div>
</div>
</div>
<!-- end chat user head -->
<?php
$rid=$_GET["rid"];
$_SESSION["rid"]=$rid;
?>

<form id="myform" action="../controller/message_controller.php?rid=<?php echo $rid; ?>" method="POST">
<!-- start chat conversation -->
<div id="div1"  style="height: 550px;">


</div>
<!-- end chat conversation end -->
<!-- start chat input section -->
<div class="p-3 p-lg-4 border-top mb-0">
<div class="row no-gutters">
  <div class="col">
      <div>
          <input type="text" class="form-control form-control-lg bg-light border-light" name="Message" id="message_box" placeholder="Enter Message...">
      </div>
  </div>
  <div class="col-auto">
      <div class="chat-input-links ml-md-2">
          <ul class="list-inline mb-0">
              <li class="list-inline-item">
                
               <!--  <span id="att"></span> -->

                  <button id="button" type="button" class="btn btn-primary font-size-16 btn-lg chat-send waves-effect waves-light" sy>
                      <i class="ri-send-plane-2-fill"></i>
                  </button>

              </li>
          </ul>
      </div>
      
  </div>
</div>
</div>
</form>

<!-- end chat input section -->
</div>

<!-- end chat conversation section -->

<!-- start User profile detail sidebar -->

<?php
// include('user_include/profile_detail.php');
?>
<!-- end User profile detail sidebar -->
</div>
</div>
<!-- End User chat -->
</div>
<!-- end  layout wrapper -->

<!-- JAVASCRIPT -->

<?php
include('user_include/script.php');
?>

</body>

<!-- Mirrored from themesbrand.com/chatvia/layouts/dark.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2020 13:23:52 GMT -->
</html>
<script type="text/javascript">
$(document).ready(function() {
refreshMessages();
var attnum=1;

var form=$('#myform');
$('.chat-send').click(function(){
attnum++;
$('#att').text(attnum); 
$.ajax({
url  : form.attr("action"),
type : 'POST',
data : $("#myform input").serialize(),

success:function(data){
//console.log(data);
//alert("adf");
$("#message_box").val('');
refreshMessages();
}
});
});



$('.chat-send').click(function() {
    $.ajax({
        type: 'POST',
        url: 'user/user_list.php',
        data: { count: attnum },
        success: function(data)
        {
           //alert(attnum);
        }
    });
});
});
function onsend()
{

}
</script>