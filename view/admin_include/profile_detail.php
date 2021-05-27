 <div class="user-profile-sidebar">
                        <div class="px-3 px-lg-4 pt-3 pt-lg-4">
                            <div class="user-chat-nav text-right">
                                <button type="button" class="btn nav-btn" id="user-profile-hide">
                                    <i class="ri-close-line"></i>
                                </button>
                            </div>
                        </div>

                        <form method="POST" action="../controller/add_group_member.php">


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
                                            <div class="custom-control ">
                                                <input type="checkbox" name="m_id[]" 
                                                value="<?php  echo $row['id']; ?>" 
                                                class="control-input" id="memberCheck1">

                                                <label for="memberCheck1"><?php  echo $row['name']; ?> </label>
                                            </div>
                                        </li>

                        </ul>
                      
                                               
                 <?php
               }
                  }
                  ?>
                  <input type="text"  name="g_id" value="<?php  echo $_GET['g_id']; ?>" hidden >
                  <div class="modal-footer">
           
           <input type="submit" name="submit" class="btn btn-success" value="Add Member">
           
</div>
</form>



                        </div>
                        <!-- end user-profile-desc -->
                    </div>