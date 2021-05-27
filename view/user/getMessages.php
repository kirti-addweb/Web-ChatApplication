                            <ul class="list-unstyled mb-0">
                                
                                 <?php
                                        // session_start();
                                 require_once "../model/db_connect.php";

                                        session_start();

                                        $rid= $_SESSION["rid"];
										echo "sadsaD".$rid;
                                        $email=$_SESSION['Email'];


                                        $qry="SELECT * FROM addcontact WHERE Email='$email'";

                                        $con = new connection();
                                        $conn= $con->connectdb();


                                        $rs=mysqli_query($conn,$qry);
                                        $row=mysqli_fetch_assoc($rs);
                                        $sid=$row['id'];
                                       echo $sid;


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
                                            <!-- <img src="assets/images/users/avatar-4.jpg" alt=""> -->
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
                       