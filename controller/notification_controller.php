<?php

function count_unseen_message($from_user_id, $to_user_id, $connect)
{
$query = "
SELECT * FROM message
WHERE Sid = '$Sid'
AND Rid = '$Rid'
AND isactive = '1'
";
$statement = $connect->prepare($query);
$statement->execute();
$count = $statement->rowCount();
$output = '';
if($count > 0)
{
$output = '<span class="label label-success">'.$count.'</span>';
}
return $output;
}

?>