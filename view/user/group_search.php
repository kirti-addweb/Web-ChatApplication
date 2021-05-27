<?php 
$conn = new mysqli('localhost','vismay','root','chatapp') or die("can't connect to database");
session_start();
$id=$_SESSION['id'];
if($_POST['data']==null)
{

 ?>
 <div class="list-unstyled chat-list">
  <?php
          $sql="SELECT * FROM group_member where m_id=$id";
          $select=$conn->prepare($sql);
          $select->execute();
          $res=$select->get_result();

    }  
    else
    {
         $name = $_POST['data'];
         $sql="SELECT * FROM group_member where m_id=$id";
         $select=$conn->prepare($sql);
         $select->execute();
         $res=$select->get_result();

 ?>

 <?php
}
?>             

<?php

while($row=$res->fetch_assoc())
{ 

 $sql1 = 'SELECT * FROM group_member WHERE m_id = '.$id.'  AND g_id =  '.$row["g_id"].'  AND is_read = 0';
                //echo $sql1;
         $res1 = mysqli_query($conn,$sql1);

         $row1 =mysqli_fetch_assoc($res1);
 ?>

 <div class="media align-items-center">
  <div class="chat-user-img mr-3">
                   </div>
                   <div class="media-body overflow-hidden">
                    <a href="group_chat.php?g_id=<?php echo $row['g_id']; ?>">

                      <h5 class="text font-size-14 mb-0">
                        <?php 
                        if($row1)
                        {
                          ?>
                          <h6><span class="badge badge-secondary">New</span></h6>
                          <?php
                        }
                        ?>

                        <?php 
                        if($_POST['data']==null)
                        {
                          $qry="SELECT * FROM groups where id=".$row['g_id'];
                        }
                        else
                        {
                          $qry="SELECT * FROM groups where group_name LIKE '%$name%' AND id=".$row['g_id'];
                        }   

                        $rs=mysqli_query($conn,$qry);

                        $row1=mysqli_fetch_assoc($rs);

                        echo $row1['group_name'];

                        ?></br></br></br>
                      </h5></a>
                    </div>
                     
                   </div>

                   <?php

                 }
                 ?>




