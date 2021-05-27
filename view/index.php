        <?php 
                    session_start();
                    if(!isset($_SESSION['Email']))
                    {
                         header("location: login.php");
                    }

                    $type=$_SESSION['type'];

                    if($type=='admin')
                    {
                ?> 


<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/chatvia/layouts/dark.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2020 13:23:46 GMT -->
<head>
        
 <?php
     include('admin_include/head.php');
   /* //session_start();
    if(!isset($_SESSION['Email'], $_SESSION['role'])){
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
                <?php
                    //include('user_include/profile.php');
                ?>
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
                    
                      <?php
                  // include('admin_chat.php');
                   ?>


                    <!-- end chat conversation section -->
    
                    <!-- start User profile detail sidebar -->
                   
                   <?php
                   include('admin_include/profile_detail.php');
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
 <?php
                }
                else
                {
                ?>


                <!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/chatvia/layouts/dark.php by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 13 Aug 2020 13:23:46 GMT -->
<head>
        
       <?php
       include('user_include/head.php');
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
                    
                      <?php
                   //include('chat.php');
                   ?>


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

                <?php
                }
                ?>





