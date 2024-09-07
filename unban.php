<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

if(isset($_POST['deletedata3']))
{
    $id = $_POST['delete_id'];
    if($id!=""  )
    {
    $query = " UPDATE `users` SET  `type`='1'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    }
    else{
        header('Refresh:0.2; viewban.php');
    }
    if($query_run)
    {
        echo '<script> alert("User Banned"); </script>';
       // header("Location:viewcat.php");
       header('Refresh:0.2; viewban.php');
    }
    else
    {
        echo '<script> alert("Data Not Banned"); </script>';
    }
}

?>