<?php    

 if (isset($_SESSION['id'])) {
  
    }
    ?>
<script src="validation.js"></script>
<div class="modal fade" id="signup" tabindex="-1" aria-labelledby="ModalFormLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            <div class="myform bg-dark">
                <h1 class="la text-center">Signup Form</h1>

                <form action="?" method="post">
                    <div class="mb-3 mt-4">
                        <label for="exampleInputEmail1" class="form-label">User Name</label>
                        <input type="text" class="form-control" name="name" id="ex" aria-describedby="emailHelp"
                         oninvalid="InvalidMsg6(this);"  oninput="InvalidMsg6(this);" required >
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1"  class="form-label">Email address </label>
                        <input type="email" class="form-control" name="email" id="e" 
                        oninvalid="InvalidMsg4(this);"  oninput="InvalidMsg4(this);" required>
                    </div>
                     <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="eP"
                        oninvalid="InvalidMsg2(this);"  oninput="InvalidMsg2(this);" required>
                    </div>
                    <button type="submit"  name="submit" class="btn btn-light mt-3 ">SIGN UP</button>
                    <p class="lp">Already a member? 
                       <button type="button" class=" btn btn-light  btn-sm" data-bs-toggle="modal" 
                       data-bs-target="#ModalForm">LOGIN</button>
                    </p>
                </form>
            </div>
        </div>
      </div>
    </div>
</div>

<?php
 $conn= new mysqli('localhost','root','','ezdeb');
 if($conn->connect_error) {
   echo"<script> alert('Something error occured');</script>";
 }
 if(isset($_POST['submit'])) {
   $name = $_POST['name'];
   $email =$_POST['email'];
   $password =$_POST['password']; 
   $type=1;
   $h_password = md5($password);


   $sql = "SELECT *from users where email = '$email'";  // check if email already in db
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
   $count = mysqli_num_rows($result);  
   if($count == 1 ){
    echo"<script> alert('Exsisting Email-id');</script>";
   }
   elseif($name!="" && $email!="" && $type!="" && $password!="") {
   $q="INSERT INTO users (id,username,email,password,profile_image,type) VALUES ('0','$name','$email','$h_password','','$type')";
   //$conn->query($q);
   $query_run = mysqli_query($conn, $q);

    if($query_run)
    {
       $_SESSION['id'] =$email; ?>
       <script> location.replace("index.php"); </script>
       <?php

    }
 }
 else{
echo"<script> alert('Error occured');</script>"; 
  die();
 } } ?>

