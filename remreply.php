<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

if(isset($_POST['der']))
{
    $id = $_POST['der'];
   
    //$query = "DELETE FROM reports_reply WHERE id='$id'";
    if($id!=""){
    $query = "DELETE FROM reports_reply WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);
    }
    else{
        header('Refresh:0.2; viewreport.php'); 
    }
    if($query_run)
    {

        echo '<script> alert("Data Deleted hello"); </script>';
        header("Location:viewreport.php");
       //header('Refresh:0.2; viewreport.php');
    }
    else
    {
        echo '<script> alert("Data Not Deleted"); </script>';
    }
}

?>