<?php
include('C:\wamp64\www\EZ-deb\comment\database\database_connection.php');
if(!empty($_POST['edit_id']) && !empty($_POST['edit_comment'])){
$id = $_POST['edit_id'];
$comment_update = $_POST['edit_comment'];
date_default_timezone_set("Africa/Lagos");
$update_date = date('Y-m-d H:i:s');
$sql = "UPDATE tbl_comment_post SET post_content = '$comment_update', post_datetime = '$update_date' WHERE comment_id = '$id'";
 $statement = $connect->prepare($sql);
  $statement->execute();
 if(!$statement){                      
                     $status = 'err';
                }
                   else{
                   $status = 'ok';           
          
                   }  
    // Output status
    echo $status;die;
}


?>