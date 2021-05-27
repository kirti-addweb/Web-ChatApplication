.<head>

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

               <!--  <div class="mr-3">
                    <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                </div> -->
                <?php 
                require_once "../model/db_connect.php";

                $g_id=$_GET['g_id'];

                $qry="SELECT * FROM groups WHERE id=".$g_id;

                $con = new connection();
                $conn= $con->connectdb();
                $rs=mysqli_query($conn,$qry);

                $row=mysqli_fetch_assoc($rs);
                $group_name=$row['group_name'];
               // $group_name;
                ?>
                <div class="media-body overflow-hidden">
                    <h5 class="font-size-16 mb-0 text-truncate"><a href="group_AddmemberList.php?gid=<?php echo $g_id?>" class="text-reset user-profile-show" title="Show Group Member">

                        <?php echo $group_name; ?>

                    </a> <!-- <i class="ri-record-circle-fill font-size-10 text-success d-inline-block ml-1"></i> --></h5>
                </div>
            </div>
        </div>
        <div class="col-sm-8 col-4">
            <ul class="list-inline user-chat-nav text-right mb-0">
                <li class="list-inline-item d-none d-lg-inline-block">
                    <button type="button" class="btn nav-btn user-profile-show">
                        <?php

                      /*  $sql ="SELECT id, owner_id FROM group
                      WHERE id = '".$_GET['owner_id']." '";*/
                      $qry="SELECT * FROM groups WHERE id=$g_id";

                      $con = new connection();
                      $conn= $con->connectdb();


                      $rs=mysqli_query($conn,$qry);

                      $row=mysqli_fetch_assoc($rs);

                      if($row['owner_id']==$_SESSION['id'])
                      {
                        ?>
                        <i class="ri-user-2-line"></i>
                        <?php
                    }


                    ?>
                </button>
            </li>
        </ul>
    </div>
</div>
</div>
<!-- end chat user head -->
<?php
$g_id=$_GET["g_id"];
?>


    <form action="../controller/group_message_controller.php?g_id=<?php
            echo $g_id; ?>" method="POST">

    <!-- start chat conversation -->
    <div class="chat-conversation p-3 p-lg-4" data-simplebar="init">
        <ul class="list-unstyled mb-0">

         <?php
                // session_start();

         require_once "../model/db_connect.php";

         $id=$_SESSION['id'];
         // $read_Update = 'SELECT * FROM group_member WHERE m_id = '.$id.'  AND g_id =  '.$_GET["g_id"].'  AND is_read = 0';
         $read_Update = ' UPDATE group_member set `is_read`="1"  WHERE g_id = '.$_GET['g_id'].' AND m_id =  '.$id.'  AND is_read = 0';
        // echo $read_Update;
           $rs1=mysqli_query($conn,$read_Update);
          //print_r($rs1);
         $grp="SELECT * FROM group_member WHERE m_id=".$id." AND `g_id`=".$_GET['g_id']."   ";
         $grs=mysqli_query($conn,$grp);
         $row1 = mysqli_fetch_assoc($grs);
            

         if($row1 >0)
         {

             $qry1="SELECT * FROM group_message WHERE g_id=".$row1['g_id']." ";

             $rs2=mysqli_query($conn,$qry1);
               //echo(mysqli_num_rows($rs2));
              // print_r($rs1);
             while($row=mysqli_fetch_assoc($rs2))
             {

                if($row['g_id']==$g_id && $row['Sid']==$id)
                {
                    ?>


                    <li class="right">
                        <div class="conversation-list">
               <!--  <div class="chat-avatar">
                    <img src="assets/images/users/avatar-1.jpg" alt="">
                </div> -->

                <div class="user-chat-content">
                    <div class="ctext-wrap">
                        <div class="ctext-wrap-content">
                            <p class="mb-0">
                                <?php  echo $row["Message"]; ?>
                            </p>
                            <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle"><?php  echo $row["time_msg"]; ?></span></p>
                        </div>
                    </div>
                    <div class="conversation-name"><?php  echo $_SESSION['name'];?></div>
                </div>
            </div>
        </li>
        <?php
    }
    elseif($row['Sid']==$g_id && $row['g_id']==$sid)
    {
        ?>

        <li>

            <div class="conversation-list">
                <div class="chat-avatar">
                    <img src="assets/images/users/avatar-4.jpg" alt="">
                </div>

                <div class="user-chat-content">
                    <div class="ctext-wrap">
                        <div class="ctext-wrap-content">
                            <p class="mb-0">
                             <?php  echo $row['Message']; ?>
                         </p>
                         <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle">
                          <?php  echo $row["time_msg"]; ?></span></p>
                     </div>

                 </div>
                 <!-- <div class="conversation-name">Doris Brown</div> -->
             </div>
         </div>
     </li>  

     <?php
 }
 else
 {
    ?>

    <li>

        <div class="conversation-list">
               <!--  <div class="chat-avatar">
                    <img src="assets/images/users/avatar-4.jpg" alt="">
                </div> -->

                <div class="user-chat-content">
                    <div class="ctext-wrap">
                        <div class="ctext-wrap-content">
                            <p class="mb-0">
                             <?php  echo $row['Message']; ?>
                         </p>

                         <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle"><?php  echo $row["time_msg"]; ?></span></p>
                     </div>

                 </div>
                 <div class="conversation-name">

                    <?php  

                    include_once('../model/db_connect.php');
                    $con = new connection();
                    $conn= $con->connectdb();
                    
                    $qry="SELECT * FROM addcontact WHERE id=".$row['Sid'];
                    $rs=mysqli_query($conn,$qry);
                    $row1=mysqli_fetch_assoc($rs);

                    echo $row1['name'];
                    ?>

                </div>
            </div>
        </div>
    </li> 
    <?php
        }
    }
}
?>  
</ul>
</div>
<!-- end chat conversation end -->
<!-- start chat input section -->
<div class="p-3 p-lg-4 border-top mb-0">
    <div class="row no-gutters">
        <div class="col">
            <div>
                <input type="text" class="form-control form-control-lg bg-light border-light" name="Message" placeholder="Enter Message...">
            </div>
        </div>
        <div class="col-auto">
            <div class="chat-input-links ml-md-2">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <button type="submit" class="btn btn-primary font-size-16 btn-lg chat-send waves-effect waves-light">
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
include('user_include/profile_detail.php');
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
