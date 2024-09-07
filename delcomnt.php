<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];
    $id1 = $_POST['delete_c'];
    if($id!="" && $id1!="")
    {
    //$query = "DELETE FROM reports WHERE id='$id'";
   $em='admin@gmail.com'; 
    $query = " UPDATE `tbl_comment_post` SET email ='$em', post_content='removed by admin'   WHERE comment_id='$id1' ";
    $query_run = mysqli_query($connection, $query);
    }
    else{
        header('Refresh:0.2; viewreport.php');
    }
    if($query_run)
    {
        //$quer = "DELETE FROM reports WHERE id='$id'";
        $quer = "UPDATE `reports` SET status ='removed' WHERE id='$id'";
        $query_ru = mysqli_query($connection, $quer);

        echo '<script> alert("Data Removed"); </script>';
       // header("Location:viewcat.php");
       header('Refresh:0.2; viewreport.php');
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>