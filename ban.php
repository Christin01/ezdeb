<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

if(isset($_POST['deletedata2']))
{
    $id = $_POST['delete_id'];
    $nm = $_POST['delete_nm'];
    //$nm="akdmuralimk@gmail.com";
  //  $nm = stripcslashes($nm);  
   // $nm= mysqli_real_escape_string($connection, $nm); 

    if($id!="" && $nm!="" )
    {
    $query = " UPDATE `users` SET  `type`='3'  WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);
    //$quer = "DELETE FROM reports WHERE reported_email='$nm'";
   // $query_ru = mysqli_query($connection, $quer);
   
    }
    else{
        header('Refresh:0.2; viewuser.php');
    }
   
    if($query_run)
    {
       /* $tables = array("reports","reports_reply");
        foreach($tables as $table) {
            $quer = "DELETE  FROM $table WHERE reported_email='$nm'";
            mysqli_query($connection,$quer);
         }*/
       
        //$quer = "UPDATE `reports` SET status ='removed' WHERE id='$id'";
        

        echo '<script> alert("User Banned"); </script>';
       // header("Location:viewcat.php");
       header('Refresh:0.2; viewuser.php');
    }
    else
    {
        echo '<script> alert("Data Not Banned"); </script>';
    }
}

?>