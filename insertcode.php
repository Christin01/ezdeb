<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

if(isset($_POST['insertdata']))
{
    $name = $_POST['name'];
    //$category = $_POST['category'];
    $category=filter_input(INPUT_POST,'cat'); 
    $developer= $_POST['developer'];
    $command ="ezdeb install " .$name;
    $description = $_POST['description'];
    $image= $_FILES['image']['name'];
     $image_tmp_name= $_FILES['image']['tmp_name'];
     $image_folder='image/'.$image;
     move_uploaded_file($image_tmp_name,$image_folder); 


     $sql = "SELECT *from package where name = '$name' AND  category='$category'";
     $result = mysqli_query($connection, $sql);  
     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
     $count = mysqli_num_rows($result);  
     if($count == 1){  
        echo '<script> alert("Package Exsisting"); </script>';
       // header('Location: viewpack.php');
       header('Refresh:0.2; viewpack.php');
        die();
     }

   // $query = "INSERT INTO student (`fname`,`lname`,`course`,`contact`) VALUES ('$fname','$lname','$course','$contact')";
   elseif($name!="" && $category!="" && $developer!="" && $command!="" && $description!="" && $image!=""){
   $query = "INSERT INTO package (name,category,developer,command,description,image,id) VALUES ('$name','$category','$developer','$command','$description','$image','0')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: viewpack.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
else{
    header('Location: viewpack.php');
}
}

?>