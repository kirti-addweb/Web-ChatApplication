<?php 

	$conn = mysqli_connect("localhost","vismay","root","chatapp");

	

                  $update = "UPDATE `message` SET `isactive`='0' WHERE  Rid = '".$_POST['id']." '";
                  $q = mysqli_query($conn,$update);    
                  
                  if($q)
                  {
                    echo "ok";
                  }
 ?>