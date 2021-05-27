


<head>
        
       <?php
       include('user_include/head.php');
       if($_SERVER['REQUEST_URI']!="/ChatApp/view/index.php")
         session_start();

       ?>

    </head>


<div class="w-100">
                        <div class="p-3 p-lg-4 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-sm-4 col-8">
                                    <div class="media align-items-center">
                                        <div class="d-block d-lg-none mr-2">
                                            <a href="javascript: void(0);" class="user-chat-remove text-muted font-size-16 p-2"><i class="ri-arrow-left-s-line"></i></a>
                                        </div>
                                        <div class="mr-3">
                                            <img src="assets/images/users/avatar-4.jpg" class="rounded-circle avatar-xs" alt="">
                                        </div>
                                        <div class="media-body overflow-hidden">
                                            <h5 class="font-size-16 mb-0 text-truncate"><a href="index.php" class="text-reset user-profile-show"><?php echo $_GET['rid']; ?></a> <i class="ri-record-circle-fill font-size-10 text-success d-inline-block ml-1"></i></h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8 col-4">
                                    <ul class="list-inline user-chat-nav text-right mb-0">
                                        
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-search-line"></i>
                                                </button>
                                                <div class="dropdown-menu p-0 dropdown-menu-right dropdown-menu-md">
                                                    <div class="search-box p-2">
                                                        <input type="text" class="form-control bg-light border-0" placeholder="Search..">
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
    
                                        <li class="list-inline-item d-none d-lg-inline-block">
                                            <button type="button" class="btn nav-btn user-profile-show">
                                                <i class="ri-user-2-line"></i>
                                            </button>
                                        </li>
    
                                        <li class="list-inline-item">
                                            <div class="dropdown">
                                                <button class="btn nav-btn dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="ri-more-fill"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item d-block d-lg-none user-profile-show" href="#">View profile <i class="ri-user-2-line float-right text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Archive <i class="ri-archive-line float-right text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Muted <i class="ri-volume-mute-line float-right text-muted"></i></a>
                                                    <a class="dropdown-item" href="#">Delete <i class="ri-delete-bin-line float-right text-muted"></i></a>
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

                                       // $msg  = array();

                                        $rs=mysqli_query($conn,$qry);
                                        $row=mysqli_fetch_assoc($rs);
                                        $sid=$row['id'];
                                        echo $sid;

                                       /* $res = $conn->query('SELECT Mid,Sid,Rid,Message FROM message ORDER BY Mid ASC');
                                        $i = 0;


                                        while ($row = $res->fetch()) {
                                            
                                            $msg[$i]['Mid'] = $row['Mid'];
                                            $msg[$i]['Sid'] = $row['Sid'];
                                            $msg[$i]['Rid'] = $row['Rid'];
                                            $msg[$i]['Message'] = $row['Message'];

                                            $i++;
                                        }

                                        return $msg;
*/
                                        $qry1="SELECT * FROM message WHERE Rid=$rid AND Sid=$sid";

                                        $rs1=mysqli_query($conn,$qry1);

                                       while($row=$rs1->fetch_assoc())
                                       {
                                        echo $row["Message"];
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
                      <?php
        include('user_include/script.php');
         ?>