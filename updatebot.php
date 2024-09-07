<?php
$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

    if(isset($_POST['updatedata']))
    {   
        $id = $_POST['update_id'];
        $question = $_POST['question'];
         $reply=$_POST['answer'];
         if($id!="" && $question!="" && $reply!=""){
       // $query = "UPDATE package SET fname='$fname', lname='$lname', course='$course', contact=' $contact' WHERE id='$id'  ";
       $query = " UPDATE `chatbot` SET  `queries`='$question' , `replies`= '$reply' WHERE id='$id' ";
       $query_run = mysqli_query($connection, $query);
         }
         else{
            header("Location:viewbot.php"); 
         }
        if($query_run)
        {
            echo '<script> alert("Data Updated"); </script>';
            header("Location:viewbot.php");
        }
        else
        {
            echo '<script> alert("Data Not Updated"); </script>';
        }
    }
?>