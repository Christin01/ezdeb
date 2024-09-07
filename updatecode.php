<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        $name = $_POST['name'];
       // $category = $_POST['category'];
       $category=filter_input(INPUT_POST,'cat'); 
        $developer= $_POST['developer'];
        $command ="ezdeb install"."&nbsp" .$name;
        $description = $_POST['description'];
        $image= $_FILES['image']['name'];
        $image_tmp_name= $_FILES['image']['tmp_name'];
        $image_folder='image/'.$image;
        move_uploaded_file($image_tmp_name,$image_folder); 


       
 // $query = "UPDATE package SET fname='$fname', lname='$lname', course='$course', contact=' $contact' WHERE id='$id'  ";
 if($id!="" && $name!="" && $category!="" && $developer!="" && $command!="" && $description!="" && $image!=""){
       $query = " UPDATE `package` SET  `name`='$name' , `category`= '$category', `developer`='$developer',  `command`='$command',`description`='$description',`image`='$image' WHERE id='$id' ";
       $query_run = mysqli_query($connection, $query);

        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:viewpack.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
    else{
        header("Location:viewpack.php");
    }
}
?>