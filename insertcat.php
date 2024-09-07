<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

if(isset($_POST['insertdata']))
{
    $name = $_POST['name'];
   // $query = "INSERT INTO student (`fname`,`lname`,`course`,`contact`) VALUES ('$fname','$lname','$course','$contact')";
  
   $sql = "SELECT *from category where name = '$name'";
     $result = mysqli_query($connection, $sql);  
     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
     $count = mysqli_num_rows($result);  
     if($count == 1){  
        echo '<script> alert("Category Exsisting"); </script>';
       // header('Location: viewpack.php');
       header('Refresh:0.2; viewcat.php');
        die();
     }

  
   elseif($name!=""){
   $query = "INSERT INTO category (id,name) VALUES (0,'$name')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: viewcat.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
else{
    header('Location: viewcat.php');
}
}

?>