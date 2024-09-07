<?php

$connection = mysqli_connect("localhost","root","");
$db = mysqli_select_db($connection, 'ezdeb');

if(isset($_POST['insertdata']))
{
    $question = $_POST['question'];
    $reply=$_POST['answer'];
   // $query = "INSERT INTO student (`fname`,`lname`,`course`,`contact`) VALUES ('$fname','$lname','$course','$contact')";
    
   $sql = "SELECT *from chatbot where queries = '$question'";
   $result = mysqli_query($connection, $sql);  
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
   $count = mysqli_num_rows($result);  
   if($count == 1){  
      echo '<script> alert("Question Exsisting"); </script>';
     // header('Location: viewpack.php');
     header('Refresh:0.2; viewbot.php');
      die();
   }

elseif($question!="" && $reply!=""){
   $query = "INSERT INTO chatbot (id,queries,replies) VALUES (0,'$question','$reply')";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        echo '<script> alert("Data Saved"); </script>';
        header('Location: viewbot.php');
    }
    else
    {
        echo '<script> alert("Data Not Saved"); </script>';
    }
}
else{
    header('Location: viewbot.php');
}
}

?>