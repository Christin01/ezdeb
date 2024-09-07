<?php
include('navbar.php');
include('login.php');//session_start();
include('signup.php');

if (!isset($_SESSION['id'])) {
   echo "<script> alert('YOU HAVE TO LOGIN FIRST');</script>"; //header("Location: /index.php");
   echo ("<script>location.href = 'index.php';</script>");
   die();
   }
   $sm =  $_SESSION['id'] ;
 ?>

<section class="vh-150" style="background-color: #f8f9fa;">
<br>
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-5">
        <h3 class="text-dark text-center mb-3">ADD MISING PACKAGE</h3>
        <div class="card" style="border-radius: 15px;">
          <div class="card-body">
         <form action="?" method="post">
            <div class="row align-items-center ">
              <div class="col-md-3 ps-3">
                <h6 class="mb-0">Package name</h6>
              </div>
              <div class="col-md-9 pe-5">
                <input type="text" style="color:black;" class="form-control form-control-lg"  name="pname" placeholder="Enter name"
                oninvalid="InvalidMsg3(this);"  oninput="InvalidMsg3(this);" required/>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center">
              <div class="col-md-3 ps-3">
                <h6 class="mb-3">category</h6>
              </div>
              <div class="col-md-9 pe-2">
                <input type="text"  style="color:black;" class="form-control form-control-lg" name="pcat" placeholder="Enter category" 
                oninvalid="InvalidMsg5(this);"  oninput="InvalidMsg5(this);" required/>
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center ">
              <div class="col-md-3 ps-2">
                <h6 class="mb-0">Package <br>description</h6>
              </div>
              <div class="col-md-9 pe-3">
                 <input type="text"  style="color:black;" class="form-control form-control-lg" name="pdes" placeholder="Enter description"
                 oninvalid="InvalidMsg1(this);"  oninput="InvalidMsg1(this);" required />
              </div>
            </div>
            <hr class="mx-n3">
            <div class="row align-items-center">
              <div class="col-md-3 ps-3">
                <h6 class="mb-0">Package link (GitHub or website)</h6>
              </div>
              <div class="col-md-9 pe-2">
                <input class="form-control form-control-lg"  style="color:black;" id="formFileLg" type="text" name="plink" placeholder="Enter link"
                oninvalid="InvalidMsg7(this);"  oninput="InvalidMsg7(this);" required />
              </div>
            </div>
            <input type="hidden" value="<?php echo $sm?>" name="email" required/>
            <hr class="mx-n3">
            <div class="px-5 py-1">
              <button type="submit" name="submit3" class="btn btn-primary btn-lg">Send application</button>
            </div>
            
         </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <br>
<br>
</section>

<?php
include('footer.php');

$conn= new mysqli('localhost','root','','ezdeb');
 if($conn->connect_error) {
   echo"<script> alert('Something error occured');</script>";
 }
 if(isset($_POST['submit3'])) {
   $name = $_POST['pname'];
   $category = $_POST['pcat'];
   $description = $_POST['pdes'];
   $link = $_POST['plink'];
   $email =$_POST['email'];
   $a=0;
   if($name!="" && $category!="" && $description!="" && $link!="" && $email!="" ) {
   $q="INSERT INTO misspck (name,category,description,link,email,id) VALUES ('$name','$category','$description','$link','$email',$a)";
   //$conn->query($q);

   $query_run = mysqli_query($conn, $q);

   if($query_run)
   {
    echo"<script> alert('Request Submitted');</script>";
   ?>
      <script> location.replace("packagelist.php"); </script>
      <?php

   }

   
 }
 else{
echo"<script> alert('Error occured');</script>"; 
  die();
 } 
}


?>