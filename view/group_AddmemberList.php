<html lang="en">
<head>
  <?php 
  include('admin_include/head.php');
//include_once('../controller/login_controller.php');
  ?>
</head>
<body>
  <div class="p-5">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title font-size-16" id="addContact-exampleModalLabel"><button type="button" name="button" onclick="goBack()" style="margin-right: 300px;">Back</button></h5>
        </div>
        <div class="modal-body p-4">

         <form name="frmChange" method="post" action="index.php">

          <?php 

          session_start();
   /* $user=new usermodel();
   $data=$user->select1();*/

   
   $conn = mysqli_connect("localhost","vismay","root","chatapp") or die("can't connect to database");


   $g_id=$_GET['gid'];
   $sql="SELECT * FROM group_member WHERE g_id=$g_id";

   $res = mysqli_query($conn,$sql);

         $qry2="SELECT * FROM groups WHERE id=".$_GET['gid'];
      // print_r($qry2);
      $rs2=mysqli_query($conn,$qry2);
      $row2=mysqli_fetch_assoc($rs2);

   while($row = mysqli_fetch_assoc($res))
   {

    $qry="SELECT * FROM addcontact WHERE id=".$row['m_id'];
    $rs=mysqli_query($conn,$qry);

    while($row1=mysqli_fetch_assoc($rs))
    {


      ?>
      <ul class="list-unstyled contact-list" >
        <li>
          <div class="media align-items-center">
            <div style="margin-right: 10px;">
              <div class="avatar-xs"> <img src=" <?php echo $row1['image']?>" 
                class="avatar-title rounded-sqare"> 
              </div>
            </div>
            <div class="media-body" id="tr">
              <a href="chat.php?rid=<?php echo $row['id']; ?>" class="chatting_id"  data-id="<?php echo $row['id']; ?>"> 
                <h5 class="font-size-14 m-0"><?php echo $row1['name']; ?>
              </h5> 
            </a>
          </div>
          <div class="dropdown">
        <?php
                if($row1['id'] == $row2['owner_id'])
                {
                ?> <h6><span class="badge badge-secondary">Admin</span></h6>

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
      </form>
    </div>
  </div>
</div>

</div>

<?php include('admin_include/script.php');
?>


</body>
</html>

<script>
  function goBack() {
    window.history.back();
  }
</script>
