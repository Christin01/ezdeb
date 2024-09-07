<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

if(isset($_POST['deletedata1']))
{
    $id = $_POST['delete_id1'];
    $id2 = $_POST['delete_c1'];
    $em='admin@gmail.com'; 
    //$query = "DELETE FROM reports_reply WHERE id='$id'";
    if($id!="" && $id2!=""){
    $query = "UPDATE `tbl_reply` SET email ='$em', replies ='removed by admin' WHERE reply_id ='$id2' ";
    $query_run = mysqli_query($connection, $query);
    }
    else{
        header('Refresh:0.2; viewreport.php'); 
    }
    if($query_run)
    {
        $quer = "UPDATE `reports_reply` SET status ='removed' WHERE id='$id'";
        $query_ru = mysqli_query($connection, $quer);
        echo '<script> alert("Data Deleted hello"); </script>';
       // header("Location:viewcat.php");
       header('Refresh:0.2; viewreport.php');
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>