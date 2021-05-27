            <head>

            <?php
            include('admin_include/head.php');
            if($_SERVER['REQUEST_URI']!="/ChatApp/view/index.php")
            session_start();

            /* if(!isset($_SESSION['Email'], $_SESSION['role']))
            {
            header("location: login.php");
            }*/
            ?>

            </head>


            <body>

            <div class="layout-wrapper d-lg-flex">

            <!-- Start left sidebar-menu -->



            <?php
            include('admin_include/sidemenu.php');
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
            include('admin/group_tab.php');
            ?>

            <!-- End groups tab-pane -->

            <!-- Start contacts tab-pane -->

            <?php
            include('admin/contact_tab.php');
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

                    <div class="mr-3">
                       <!--  <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt=""> -->
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
                    <div class="media-body overflow-hidden">
                        <h5 class="font-size-16 mb-0 text-truncate"><a href="index.php" class="text-reset user-profile-show"><?php echo $name; ?></a>
                           
                           <?php
                        // $query = "select * from addcontact where id=".$_GET['rid'];
                            //$res = mysqli_query($con,$query);

                           $sql = "SELECT id, isactive FROM addcontact
                           WHERE id = '".$_GET['rid']." '
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
<!--                         <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-search-line"></i>
                        </button>
                        <div class="dropdown-menu p-0 dropdown-menu-right dropdown-menu-md">
                            <div class="search-box p-2">
                                <input type="text" class="form-control bg-light border-0" placeholder="Search..">
                            </div>
                        </div>
 -->                    </div>
                </li>
                
                
                
                
                
            </ul>
            </div>
            </div>
            </div>
            <!-- end chat user head -->
            <?php
            $rid=$_GET["rid"];
            ?>


            <form action="../controller/message_controller.php?rid=<?php echo $rid; ?>" method="POST">

            <!-- start chat conversation -->
            <div class="chat-conversation p-3 p-lg-4" data-simplebar="init">
            <ul class="list-unstyled mb-0">

            <?php
                    // session_start();

            require_once "../model/db_connect.php";



            $email=$_SESSION['Email'];


            $qry="SELECT * FROM addcontact WHERE Email='$email'";

            $con = new connection();
            $conn= $con->connectdb();


            $rs=mysqli_query($conn,$qry);
            $row=mysqli_fetch_assoc($rs);
            $sid=$row['id'];
                   // echo $sid;


            $qry1="SELECT * FROM message WHERE Rid=$sid OR Sid=$sid";

            $rs1=mysqli_query($conn,$qry1);
                   //echo(mysqli_num_rows($rs1));
                  // print_r($rs1);
            while($row=$rs1->fetch_assoc())
            {

            if($row['Rid']==$rid && $row['Sid']==$sid)
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
                        <!-- <div class="conversation-name">Patricia Smith</div> -->
                    </div>
                </div>
            </li>
            <?php
            }
            elseif($row['Sid']==$rid && $row['Rid']==$sid)
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
                                   <?php  echo $row["Message"]; ?>
                               </p>
                               <p class="chat-time mb-0"><i class="ri-time-line align-middle"></i> <span class="align-middle"><?php  echo $row["time_msg"]; ?></span></p>
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
            // include('admin_include/profile_detail.php');
            ?>
            <!-- end User profile detail sidebar -->
            </div>
            </div>
            <!-- End User chat -->
            </div>
            <!-- end  layout wrapper -->

            <!-- JAVASCRIPT -->


            <?php
            include('admin_include/script.php');
            ?>


            </body>

            <!-- Mirrored from themesbrand.com/chatvia/layouts/dark.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2020 13:23:52 GMT -->
            </html>
