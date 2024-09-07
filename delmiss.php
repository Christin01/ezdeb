<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

if(isset($_POST['deletedata']))
{
    $id = $_POST['delete_id'];
    if($id!="" ){
    $query = "DELETE FROM misspck WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    }
    else{
        header('Refresh:0.2; viewmissing.php');
    }
    if($query_run)
    {
        echo '<script> alert("Data Deleted"); </script>';
        //header("Location:viewmissing.php");
        header('Refresh:0.2; viewmissing.php');
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>