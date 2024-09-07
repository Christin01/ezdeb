<?php
session_start();
if (!isset($_SESSION['admin'])) {
	echo ("<script>location.href = 'login.php';</script>");
}

?>

<?php include("nav.php"); ?>
<!-- Modal add package -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Question Answer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="insertbot.php" method="POST" >

                    <div class="modal-body">
                        <div class="form-group">
                            <label>Questions</label>
                            <input type="text" name="question" id="name" class="form-control"
                                placeholder="Enter Questions"
                                oninvalid="InvalidMsg11(this);"  oninput="InvalidMsg11(this);" required>
                        </div>
                        <div class="form-group">
                            <label>Answers</label>
                            <input type="text" name="answer" id="name" class="form-control"
                                placeholder="Enter Answers"
                                oninvalid="InvalidMsg12(this);"  oninput="InvalidMsg12(this);" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="insertdata" class="btn btn-primary">Save Data</button>
                    </div>
                </form>

            </div>
        </div>
    </div>


<!-- EDIT POP UP FORM (Bootstrap MODAL) -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">UPDATE Question Answers</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="updatebot.php" method="POST" enctype="multipart/form-data">

                    <div class="modal-body">

                        <input type="hidden" name="update_id" id="update_id">

                        <div class="form-group">
                            <label>Questions</label>
                            <input type="text" name="question" id="name" class="form-control"
                                placeholder="Enter Question"
                                oninvalid="InvalidMsg11(this);"  oninput="InvalidMsg11(this);" required>
                        </div>
                        <div class="form-group">
                            <label>Answers</label>
                            <input type="text" name="answer" id="name" class="form-control"
                                placeholder="Enter Answer"
                                oninvalid="InvalidMsg12(this);"  oninput="InvalidMsg12(this);" required>
                        </div>

                       

                       
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" name="updatedata" class="btn btn-primary">Update Data</button>
                    </div>
                </form>

            </div>
        </div>
        
     <!--   <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>-->
      </div>
    </div>



    </div>


   
    <!-- DELETE POP UP FORM (Bootstrap MODAL) -->
    <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Question</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>

                <form action="delbot.php" method="POST">

                    <div class="modal-body">

                        <input type="hidden" name="delete_id" id="delete_id">

                        <h4> Do you want to Delete this Question ??</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"> NO </button>
                        <button type="submit" name="deletedata" class="btn btn-primary"> Yes !! Delete it. </button>
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
        <h3 style="padding-top:10px">BOT</h3>
      </div>
      <div class="profile-details">
      <button  type="button" class="btn btn-primary mt-5 ms-auto" data-toggle="modal" data-target="#studentaddmodal">
                       ADD DATA </button>  
      </div>
    </nav>


    <!-- main page-->

    <div class="container col-12 ">
   <!-- <div class="jumbotron col-12 ">-->
            <div class="card">
            <h2 class="ms-auto"> ADD Category</h2> 
            </div>
            
           <!-- <div class="card h-10">
                <div class="card-body">
                    <button  type="button" class="btn btn-primary " data-toggle="modal" data-target="#studentaddmodal">
                       ADD DATA </button>  
              </div>
            </div>-->
            <div class="card table-responsive{-sm|-md|-lg|-xl}">
                <div class="card-body  table-responsive-sm table-responsive-md table-responsive-lg table-responsive-sm table-responsive-xl">

                    <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection, 'ezdeb');

                $query = "SELECT * FROM chatbot";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark table-hover ">
                        <thead>
                            <tr>
                                <th scope="col"> ID</th>
                                <th scope="col">QUESTIONS</th>
                                <th scope="col">ANSWERS</th>
                                <th scope="col">EDIT </th>
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
                                <td> <?php echo $row['queries']; ?> </td>
                                <td> <?php echo $row['replies']; ?> </td>
                                <td>
                                    <button type="button" class="btn btn-success editbtn"> EDIT </button>
                                </td>
                                <td  class="pr-56">
                                    <button type="button" class="btn btn-danger deletebtn ms-auto"> DELETE </button>
                                </td>
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

            });
        });
    </script>

   
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