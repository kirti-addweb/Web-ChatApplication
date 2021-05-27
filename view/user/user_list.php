  <?php 

    session_start();
      $conn = mysqli_connect("localhost","vismay","root","chatapp") or die("can't connect to database");
    $sql="SELECT * FROM addcontact";
  
  $res = mysqli_query($conn,$sql);

    while($row = mysqli_fetch_assoc($res))
    {

      if($_SESSION['id'] != $row['id'])
      {

        $sql1 = 'SELECT * FROM message WHERE Sid = '.$row["id"] .' AND Rid =  '.$_SESSION["id"].'  AND is_read = 0';
       // echo $sql1;
         $res1 = mysqli_query($conn,$sql1);

       $row1 =mysqli_fetch_assoc($res1);

         //print_r($row1);
        ?>
          <ul class="list-unstyled contact-list" >
            <li>
              <div class="media align-items-center">
                <div style="margin-right: 10px;">
                  <div class="avatar-xs"> <img src=" <?php echo $row['image']?>" 
                    class="avatar-title rounded-sqare"> 
                </div>
                </div>
                <div class="media-body" id="tr">
                  <a href="chat.php?rid=<?php echo $row['id']; ?>" class="chatting_id"  data-id="<?php echo $row['id']; ?>">
                  <?php 
                      if($row1)
                      {
                  ?>
                  <h6><span class="badge badge-secondary">New</span></h6>
                  <?php
                }
                  ?>

                    <h5 class="font-size-14 m-0"><?php  echo $row['name']; ?>
                  
                    </h5> 
                 </a>
                </div>
                <div class="dropdown">
                  <?php

    //    $_POST['count'];

          if($row['isactive']==1)
          {
            ?> <i class="ri-record-circle-fill font-size-10 text-success d-inline-block ml-1"></i>
                    <?php
          }
          else
          {
            ?> <i class="ri-record-circle-fill font-size-10 text-danger d-inline-block ml-1"></i>
                      <?php
          }
          ?>
                </div>
              </div>
            </li>
          </ul>
          <?php
      }
  }
?>