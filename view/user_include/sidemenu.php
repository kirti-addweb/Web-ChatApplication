           <div class="side-menu flex-lg-column mr-lg-1">
            <!-- LOGO -->
            <div class="navbar-brand-box">
                

                <a href="index.php" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo.svg" alt="" height="30" title="Home Page">
                    </span>
                </a>
            </div>
            <div class="flex-lg-column my-auto">
                <ul class="nav nav-pills side-menu-nav justify-content-center" role="tablist">
            

                   <li class="nav-item" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Contacts">
                    <a class="nav-link active" id="pills-contacts-tab" data-toggle="pill" href="#pills-contacts" role="tab">
                        <i class="ri-contacts-line"></i>
                    </a>
                </li>
                <li class="nav-item" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Groups">
                    <a class="nav-link" id="pills-groups-tab" data-toggle="pill" href="#pills-groups" role="tab">
                        <i class="ri-group-line"></i>
                    </a>
                </li>
             
           <!--        <li class="nav-item" data-toggle="tooltip" data-trigger="hover" data-placement="top" title="Profile">
                            <a class="nav-link" id="pills-user-tab" data-toggle="pill" href="#pills-user" role="tab">
                                <i class="ri-user-2-line"></i>
                            </a>
                  </li> -->


                <li class="nav-item dropdown profile-user-dropdown d-inline-block d-lg-none">
                    <a class="nav-link dropdown-toggle" href="javascript: void(0);" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="profile-user rounded-circle">
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Profile <i class="ri-profile-line float-right text-muted"></i></a>
                        <a class="dropdown-item" href="#">Setting <i class="ri-settings-3-line float-right text-muted"></i></a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Log out <i class="ri-logout-circle-r-line float-right text-muted"></i></a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="flex-lg-column d-none d-lg-block">
            <ul class="nav side-menu-nav justify-content-center">


                <li class="nav-item btn-group dropup profile-user-dropdown">
                    <a class="nav-link" id="light-dark" href="logout.php" data-toggle="tooltip" data-trigger="hover" title="Log Out" style="display: flex;justify-content: center;"> <i class="ri-logout-circle-r-line float-right text-muted"></i></a>
                </li>
            </ul>
        </div>
 </div>