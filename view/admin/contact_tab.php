   <div class="tab-pane fade show active" id="pills-contacts" role="tabpanel" aria-labelledby="pills-contacts-tab">
                        <!-- Start Contact content -->
                        <div>
                            <div class="p-4">
                                <div class="user-chat-nav float-right">
                                    <div data-toggle="tooltip" data-placement="bottom" title="Add Contact">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-link text-decoration-none text-muted font-size-18 py-0" data-toggle="modal" data-target="#addContact-exampleModal">
                                            <i class="ri-user-add-line"></i>
                                        </button>
                                    </div>
                                </div>
                                <h4 class="mb-4"> <?php echo $_SESSION['name']; ?></h4>

                                <!-- Start Add contact Modal -->



                           <?php
                            include('addcontact.php');
                           ?>




                                <!-- End Add contact Modal -->

                                <div class="search-box chat-search-box">
                                    <!-- <div class="input-group bg-light  input-group-lg rounded-lg">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-link text-decoration-none text-muted pr-1" type="button">
                                                <i class="ri-search-line search-icon font-size-18"></i>
                                            </button>
                                        </div>
                                        <input type="text" class="form-control bg-light " placeholder="Search users..">
                                    </div> -->
                                </div>
                                <!-- End search-box -->
                            </div>
                            <!-- end p-4 -->



                            <!-- Start contact lists -->
                            <div class="p-4 chat-message-list chat-group-list" data-simplebar>
        
                                <div>
                                
                        <?php 
                         
                        include_once('../model/viewcontact_model.php');
                        $user=new usermodel();
                        $data=$user->select1();

                        while($row=$data->fetch_assoc())
                              { 
                                  if($_SESSION['id']!=$row['id'])
                                     {

                                ?>

                                    <ul class="list-unstyled contact-list">
                                        <li>
                                            <div class="media align-items-center">
                                                <div class="media-body">

                                                    
                                       <a href="admin_chat.php?rid=<?php echo $row['id']; ?>">
                                          <h5 class="font-size-14 m-0"><?php  echo $row['name']; ?>
                                          
                                            <!-- <i class="ri-record-circle-fill font-size-10 text-success d-inline-block ml-1"></i>  -->
                                          </h5>
                                    </a>
                                                </div>
                        <!-- 
                                                <div class="dropdown">
                                                    <a href="#" class="text-muted dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="ri-more-2-fill"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#">Share <i class="ri-share-line float-right text-muted"></i></a>
                                                        <a class="dropdown-item" href="#">Block <i class="ri-forbid-line float-right text-muted"></i></a>
                                                        <a class="dropdown-item" href="#">Remove <i class="ri-delete-bin-line float-right text-muted"></i></a>
                                                    </div>
                                                </div> -->
                                                
                                            </div>
                                        </li>

                                    </ul>

                  <?php
              }
                  }
                  ?>
                                </div>
                                <!-- end contact list A -->

                          
                            </div>
                            <!-- end contact lists -->
                        </div>
                        <!-- Start Contact content -->
                    </div>