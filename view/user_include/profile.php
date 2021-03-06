    <div class="tab-pane" id="pills-setting" role="tabpanel" aria-labelledby="pills-setting-tab">
                        <!-- Start Settings content -->
                        <div>
                            <div class="px-4 pt-4">
                                <h4 class="mb-0">Settings</h4>
                            </div>

                            <div class="text-center border-bottom p-4">
                                <div class="mb-4 profile-user">
                                    <img src="assets/images/users/avatar-1.jpg" class="rounded-circle avatar-lg img-thumbnail" alt="">
                                    <button type="button" class="btn bg-light avatar-xs p-0 rounded-circle profile-photo-edit">
                                        <i class="ri-pencil-fill"></i>
                                    </button>
                                </div>

                                <h5 class="font-size-16 mb-1 text-truncate">Patricia Smith</h5>
                                <div class="dropdown d-inline-block mb-1">
                                    <a class="text-muted dropdown-toggle pb-1 d-block" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Available <i class="mdi mdi-chevron-down"></i>
                                    </a>
          
                                    <div class="dropdown-menu">
                                      <a class="dropdown-item" href="#">Available</a>
                                      <a class="dropdown-item" href="#">Busy</a>
                                    </div>
                                </div>
                            </div>
                            <!-- End profile user -->

                            <!-- Start User profile description -->
                            <div class="p-4 user-profile-desc" data-simplebar>
        
                                <div id="profile-setting-accordion" class="custom-accordion">
                                    <div class="card shadow-none border mb-2">
                                        <a href="#profile-setting-personalinfocollapse" class="text-dark" data-toggle="collapse"
                                                        aria-expanded="true"
                                                        aria-controls="profile-setting-personalinfocollapse">
                                            <div class="card-header" id="profile-setting-personalinfoheading">
                                                <h5 class="font-size-14 m-0">
                                                    Personal Info
                                                    <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
                                                </h5>
                                            </div>
                                        </a>

                                        <div id="profile-setting-personalinfocollapse" class="collapse show"
                                                aria-labelledby="profile-setting-personalinfoheading" data-parent="#profile-setting-accordion">
                                            <div class="card-body">

                                                <div class="float-right">
                                                    <button type="button" class="btn btn-light btn-sm"><i class="ri-edit-fill mr-1 align-middle"></i> Edit</button>
                                                </div>

                                                <div>
                                                    <p class="text-muted mb-1">Name</p>
                                                    <h5 class="font-size-14">Patricia Smith</h5>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">Email</p>
                                                    <h5 class="font-size-14">adc@123.com</h5>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">Time</p>
                                                    <h5 class="font-size-14">11:40 AM</h5>
                                                </div>

                                                <div class="mt-4">
                                                    <p class="text-muted mb-1">Location</p>
                                                    <h5 class="font-size-14 mb-0">California, USA</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end profile card -->
                                    <div class="card shadow-none border mb-2">
                                        <a href="#profile-setting-privacycollapse" class="text-dark collapsed" data-toggle="collapse"
                                                        aria-expanded="false"
                                                        aria-controls="profile-setting-privacycollapse">
                                            <div class="card-header" id="profile-setting-privacyheading">
                                                <h5 class="font-size-14 m-0">
                                                    Privacy
                                                    <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
                                                </h5>
                                            </div>
                                        </a>
                                        <div id="profile-setting-privacycollapse" class="collapse" aria-labelledby="profile-setting-privacyheading"
                                                data-parent="#profile-setting-accordion">
                                            <div class="card-body">
                                                <div class="py-3">
                                                    <div class="media align-items-center">
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Profile photo</h5>

                                                        </div>
                                                        <div class="dropdown ml-2">
                                                            <button class="btn btn-light btn-sm dropdown-toggle w-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Everyone <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Everyone</a>
                                                                <a class="dropdown-item" href="#">selected</a>
                                                                <a class="dropdown-item" href="#">Nobody</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="py-3 border-top">
                                                    <div class="media align-items-center">
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Last seen</h5>

                                                        </div>
                                                        <div class="ml-2">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="privacy-lastseenSwitch" checked>
                                                                <label class="custom-control-label" for="privacy-lastseenSwitch"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-3 border-top">
                                                    <div class="media align-items-center">
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Status</h5>

                                                        </div>
                                                        <div class="dropdown ml-2">
                                                            <button class="btn btn-light btn-sm dropdown-toggle w-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Everyone <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Everyone</a>
                                                                <a class="dropdown-item" href="#">selected</a>
                                                                <a class="dropdown-item" href="#">Nobody</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="py-3 border-top">
                                                    <div class="media align-items-center">
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Read receipts</h5>

                                                        </div>
                                                        <div class="ml-2">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="privacy-readreceiptSwitch" checked>
                                                                <label class="custom-control-label" for="privacy-readreceiptSwitch"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                        
                                                <div class="py-3 border-top">
                                                    <div class="media align-items-center">
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Groups</h5>

                                                        </div>
                                                        <div class="dropdown ml-2">
                                                            <button class="btn btn-light btn-sm dropdown-toggle w-sm" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                Everyone <i class="mdi mdi-chevron-down"></i>
                                                            </button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <a class="dropdown-item" href="#">Everyone</a>
                                                                <a class="dropdown-item" href="#">selected</a>
                                                                <a class="dropdown-item" href="#">Nobody</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                        
                                        </div>
                                    </div>
                                    <!-- end Privacy card -->

                                    <div class="card shadow-none border mb-2">
                                        <a href="#profile-setting-securitynoticollapse" class="text-dark collapsed" data-toggle="collapse"
                                                        aria-expanded="false"
                                                        aria-controls="profile-setting-securitynoticollapse">
                                            <div class="card-header" id="profile-setting-securitynotiheading">
                                                <h5 class="font-size-14 m-0">
                                                    Security
                                                    <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
                                                </h5>
                                            </div>
                                        </a>
                                        <div id="profile-setting-securitynoticollapse" class="collapse" aria-labelledby="profile-setting-securitynotiheading"
                                                data-parent="#profile-setting-accordion">
                                            <div class="card-body">
                        
                                                <div>
                                                    <div class="media align-items-center">
                                                        <div class="media-body overflow-hidden">
                                                            <h5 class="font-size-13 mb-0 text-truncate">Show security notification</h5>

                                                        </div>
                                                        <div class="ml-2">
                                                            <div class="custom-control custom-switch">
                                                                <input type="checkbox" class="custom-control-input" id="security-notificationswitch">
                                                                <label class="custom-control-label" for="security-notificationswitch"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Security card -->

                                    <div class="card shadow-none border mb-2">
                                        <a href="#profile-setting-helpcollapse" class="text-dark collapsed" data-toggle="collapse"
                                                        aria-expanded="false"
                                                        aria-controls="profile-setting-helpcollapse">
                                            <div class="card-header" id="profile-setting-helpheading">
                                                <h5 class="font-size-14 m-0">
                                                    Help
                                                    <i class="mdi mdi-chevron-up float-right accor-plus-icon"></i>
                                                </h5>
                                            </div>
                                        </a>
                                        <div id="profile-setting-helpcollapse" class="collapse" aria-labelledby="profile-setting-helpheading"
                                                data-parent="#profile-setting-accordion">
                                            <div class="card-body">
                        
                                                <div>
                                                    <div class="py-3">
                                                        <h5 class="font-size-13 mb-0"><a href="#" class="text-body d-block">FAQs</a></h5>
                                                    </div>
                                                    <div class="py-3 border-top">
                                                        <h5 class="font-size-13 mb-0"><a href="#" class="text-body d-block">Contact</a></h5>
                                                    </div>
                                                    <div class="py-3 border-top">
                                                        <h5 class="font-size-13 mb-0"><a href="#" class="text-body d-block">Terms & Privacy policy</a></h5>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end Help card -->
                                </div>
                                <!-- end profile-setting-accordion -->
                            </div>
                            <!-- End User profile description -->
                        </div>
                        <!-- Start Settings content -->
                    </div>