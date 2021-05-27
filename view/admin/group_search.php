<?php 
$conn = new mysqli('localhost','vismay','root','chatapp') or die("can't connect to database");
session_start();
$id=$_SESSION['id'];

//if(isset($_POST['data']))
if($_POST['data']==null)
{
 ?>
 


 <div class="list-unstyled chat-list">
<?php
//echo "asdfff";

    $sql="SELECT * FROM group_member where m_id=$id";

    $select=$conn->prepare($sql);
    $select->execute();
    $res=$select->get_result();



}  
else
{
  //echo "else";
   $name = $_POST['data'];

    //$sql="SELECT * FROM group_member AND name LIKE '%$name%'  where m_id=$id  "  ;

    //$sql="SELECT * FROM group_member WHERE name LIKE '%$name%' WHERE m_id=$id  ";

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
                 ?>
                 
                  <div class="media align-items-center">
                    <div class="chat-user-img mr-3">
                     <!--  <div class="avatar-xs"> <span class="avatar-title rounded-circle bg-soft-primary text-primary"> 

                      </span> </div> -->
                    </div>
                    <div class="media-body overflow-hidden">
                      <a href="group_chat.php?g_id=<?php echo $row['g_id']; ?>">

                        <h5 class="text font-size-14 mb-0">
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

                      <!-- <div class="dropdown">
                        <a href="#" class="text-muted dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ri-more-2-fill"></i> </a>
                        <div class="dropdown-menu dropdown-menu-right">
                          <a class="dropdown-item" href="#">
                           <?php  //echo $row['m_id']; ?>
                         </a>
                       </div>
                     </div> -->
                     
                   </div>
                
                 <?php

               }
               ?>
            



