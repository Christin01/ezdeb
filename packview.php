
<?php include("nav.php"); ?>
<link rel="stylesheet" href="assets/css/bootstrap-reboot.css">
<link rel="stylesheet" href="assets/css/bootstrap.min.css">

    

    <?php
    if(isset($_POST['pinfo']))
    { 
        $idp = $_POST['pinfo'];
        if($idp1=""){
            echo ("<script>location.href = 'viewpack.php';</script>");
        }
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'ezdeb');
                $query = "SELECT * FROM package WHERE id=$idp";
                $query_run = mysqli_query($connection, $query);
           
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
                        $i=   $row['id'];
            ?>  
    <nav>
     <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
      <h3><?php echo $row['name']; ?> </h3>
      </div>
    </nav>   
    <div class="container">

        <div class="card">
            <div class="row no-gutters " style="margin-top: 90px;">
                <div class="col-md-3">
                
                <img src = "image/<?php echo  $row['image'];?>"  class="card-img"  alt = "LOADING.."class="card-img " />
                </div>
                <div class="col-md-8">
       <div class="card-body">
          <h5 class="card-title">
          <?php echo $row['name']; ?>  <span class="badge badge-primary">New</span></h5>
          <p class="card-text">
            <span class="badge badge-pill badge-success"> <i class="fa fa-television"> <?php echo $row['category']; ?></i></span>
         </p>
         <p class="card-text" style="color:black">
         <?php echo $row['developer']; ?><br><hr>   
       </div>
         <p class="pl-2" style="color:black"><?php echo $row['description']; ?></p>
                        <div class="mb-5">
                            <p class="card-text float-right">
                                <small class="text-muted"> <i class="fa fa-clock-o"></i> <?php echo $row['id']; ?></small>
                            </p>
                        </div>

                       <!-- <button class="btn btn-primary btn-block">
                            <i class="fa fa-newspaper-o pr-2"></i> Read more
                        </button>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
 }
  
else 
{
    echo "No Record Found";
}

?>


<div class="card table-responsive{-sm|-md|-lg|-xl}">
                <div class="card-body  table-responsive-sm table-responsive-md table-responsive-lg table-responsive-sm table-responsive-xl">

<?php
             

                $query = "SELECT * FROM tbl_comment_post WHERE page_post=$i";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark table-hover ">
                        <thead>
                            <tr>
                            <th scope="col">Package ID</th>
                                <th scope="col"> ID</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">DATE TIME</th>
                                <th scope="col">Replies </th>
                              <!--  <th scope="col">DELETE </th>-->
                            </tr>
                        </thead>
                        <?php
                if($query_run)
                {
                    foreach($query_run as $row)
                    {
                         
            ?>     
                        <tbody>
                            <tr>
                            <td> <?php echo $row['page_post']; ?> </td>
                                <td> <?php echo $row['comment_id']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['post_content']; ?> </td>
                                <td> <?php echo $row['post_datetime']; ?> </td>
                                
                              <!--  <td>
                                    <button type="button" class="btn btn-info viewbtn"> VIEW </button>
                                </td>-->

                               <?php
                               $ci=$row['comment_id'];
                               $t3="SELECT * FROM tbl_reply WHERE comment_id= '$ci' ";
                              $e3=mysqli_query($connection,$t3);
                              $b3=mysqli_num_rows($e3); 
                              if($b3==0) { ?>
                               <td>  No Replies</td>
                                <?php }
                            else{ ?>
                                <td>
                                    <form action="viewrep.php" method="post">
                                    <button type="submit" name="vreply" id="vreply" value="  <?php echo $row['comment_id']; ?> " class="btn btn-success "> replies</button>
                                    </form>
                                </td>
                                <?php } ?>
                                <!-- <td>
                                   <form action="" method="post">
                                    <button type="submit" name="vreply" id="vreply" value="  <?php //echo $row['comment_id']; ?> " class="btn btn-danger"> DELETE</button>
                                    </form>
                                </td>-->
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
               
                else 
                {
                    echo "<h3>No Record Found</h3>";
                    echo '<script> alert("Error  Occured"); </script>';
                }
            }
            ?>
                    </table>
                </div>
            </div>


      <!--</div>-->
    </div>


    <!-- Bootstrap JS -->
    <script src="./assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="./assets/js/bootstrap.min.js"></script>
</body>
<script>
let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
}else
  sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
}
 </script>

</html>

