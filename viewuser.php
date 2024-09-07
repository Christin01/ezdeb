<?php
session_start();
if (!isset($_SESSION['admin'])) {
	echo ("<script>location.href = 'login.php';</script>");
}

?>


<?php include("nav.php"); ?>


<!-- DELETE POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="deletemodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remove User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="ban.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">
                        <input type="hidden" name="delete_nm" id="delete_nm">
                       

                        <h4> Are you sure  ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="deletedata2" name="deletedata2" class="btn btn-primary"> Yes !! Ban. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>



    
<nav>
     <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
      <!--<button  type="button" class="btn btn-primary mt-5 ms-auto" data-toggle="modal" data-target="#studentaddmodal">
                       ADD DATA </button>  -->
                       <h3>USERS</h3>
      </div>
    </nav>

    <!-- main page-->
    <div class="container col-12 ">
   <!-- <div class="jumbotron col-12 ">-->
            <div class="card">
            <h2 class="ms-auto"> ADD PACKAGE </h2> 
            </div>    
        <!--   <div class="card h-10">
                <div class="card-body">
                    <button  type="button" class="btn btn-primary mt-5" data-toggle="modal" data-target="#studentaddmodal">
                       ADD DATA </button>  
              </div>
            </div>-->
            <div class="card table-responsive{-sm|-md|-lg|-xl}">
                <div class="card-body  table-responsive-sm table-responsive-md table-responsive-lg table-responsive-sm table-responsive-xl">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'ezdeb');

              

                $query = "SELECT * FROM users WHERE type=1";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark table-hover ">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col"> NAME</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Comment Reports</th>
                                <th scope="col">Replies</th>
                                <th scope="col">Reply  Reports</th>
                              <!--  <th scope="col"> VIEW </th>-->
                              <th scope="col">BAN </th>
                              
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
                               
                         
                            <?php
                              $em= $row['email']; 
                              $r="SELECT * FROM reports WHERE reported_email= '$em' ";
                             $e=mysqli_query($connection,$r);
                             $b=mysqli_num_rows($e); 

                            $t="SELECT * FROM reports_reply WHERE reported_email= '$em' ";
                             $e1=mysqli_query($connection,$t);
                             $b1=mysqli_num_rows($e1); 
                             
                             $t2="SELECT * FROM tbl_comment_post WHERE email= '$em' ";
                             $e2=mysqli_query($connection,$t2);
                             $b2=mysqli_num_rows($e2); 

                             $t3="SELECT * FROM tbl_reply WHERE email= '$em' ";
                             $e3=mysqli_query($connection,$t3);
                             $b3=mysqli_num_rows($e3); 
                             
                             ?>
                             

                           
                               
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['username']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td>  <?php echo $b2; ?> </td>
                                <td>  <?php echo $b; ?> </td>
                                <td>  <?php echo $b3; ?> </td>
                                <td>  <?php echo $b1; ?> </td>
                                
                              <!--  <td>
                                    <button type="button" class="btn btn-info viewbtn"> VIEW </button>
                                </td>-->
                              
                                <td>
                                    <button type="button" class="btn btn-primary deletebtn2">BAN</button>
                                </td>
                               </form>
                             
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Record Found";
                }
            ?>
                    </table>
                </div>
            </div>


      <!--</div>-->
    </div>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>

    <script>
        $(document).ready(function () {

            $('.deletebtn2').on('click', function () {

                $('#deletemodal1').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);
                $('#delete_nm').val(data[2]);
                

            });
        });
    </script>


</section>
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

</body>
</html>
