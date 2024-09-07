<?php
session_start();
if (!isset($_SESSION['admin'])) {
	echo ("<script>location.href = 'login.php';</script>");
}
?>


<?php include("nav.php"); ?>

 <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
 <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Remove comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delcomnt.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">
                        <input type="hidden" name="delete_c" id="delete_c">

                        <h4> Do You want to Remove comment ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
                    </div>
                </form>

            </div>
        </div>
    </div>


<!-- DELETE POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="deletemodal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Unwanted comment</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delcrepy.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id1" id="delete_id1">
                        <input type="hidden" name="delete_c1" id="delete_c1">

                        <h4> Do you want to Delete this Request ?hello?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata1" class="btn btn-primary"> Yes !! Delete it. </button>
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
         <h3>REPORTED COMMENTS</h3>
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

                $query = "SELECT * FROM reports WHERE status=''";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark table-hover ">
                        <thead>
                            <tr>
                               <th scope="col">ID</th>
                                <th scope="col">REPORTED USER</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">REPORT </th>
                                <th scope="col">COMMENT ID</th>
                                <th scope="col"> REMOVE </th>
                                <th scope="col"> DELETE </th>
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
                                <td> <?php echo $row['id']; ?> </td>
                                <td> <?php echo $row['reported_user']; ?> </td>
                                <td> <?php echo $row['reported_content']; ?> </td>
                                <td> <?php echo $row['report']; ?> </td>
                                <td> <?php echo $row['comment_postId']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn">REMOVE</button>
                                </td>

                                <form method="post" action="remreport.php">
                                <td>
                                    <button type="dec" name="dec" value="<?php echo $row['id'] ?>" class="btn btn-info ">DELETE </button>
                                </td> 
                                </form>

                            </tr>


 <?php 
 
}
}
else 
{
echo "No Record Found";
}  

  $qu = "SELECT * FROM reports_reply WHERE status=''";
  $query_ru = mysqli_query($connection, $qu);
  if($query_ru)
                {
                    foreach($query_ru as $row1)
                    {
                         
            ?>     
                        <tr>
                                <td> <?php echo $row1['id']; ?> </td>
                                <td> <?php echo $row1['reported_user']; ?> </td>
                              
                                <td> <?php echo $row1['reported_content']; ?> </td>
                                
                                <td> <?php echo $row1['report']; ?> </td>
                                <td> <?php echo $row1['reply_postId']; ?> </td>
                               
                              <!--  <td>
                                    <button type="button" class="btn btn-info viewbtn"> VIEW </button>
                                </td>--> 
                                <td>
                                    <button type="button" class="btn btn-danger deletebtn1">REMOVE</button>
                                </td>

                                <form action="remreply.php" method="post">
                                <td>
                                    <button type="der" name="der"  value="<?php echo $row1['id'] ?>" class="btn btn-info ">DELETE </button>
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

            $('.deletebtn').on('click', function () {

                $('#deletemodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id').val(data[0]);
                $('#delete_c').val(data[4]);

            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.deletebtn1').on('click', function () {

                $('#deletemodal1').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_id1').val(data[0]);
                $('#delete_c1').val(data[4]);

               //$('#delete_id').val( $row1['id']);

            });
        });
    </script>



    <script>
        $(document).ready(function () {

            $('.editbtn').on('click', function () {

                $('#editmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#update_id').val(data[0]);
              //  $('#name').val(data[1]);
               // $('#category').val(data[2]);
               // $('#developer').val(data[3]);
              //  $('#command').val(data[4]);
              //  $('#description').val(data[5]);
               // $('#image').val(data[6]);
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
