<?php include("nav.php"); 
 $connection = mysqli_connect("localhost","root","");
 $db = mysqli_select_db($connection, 'ezdeb');

    if(isset($_POST['vreply']))
    { 
        $idp = $_POST['vreply'];
               
    ?>
<nav>
     <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="profile-details">
      <h3>Replies</h3>
    </nav>
<div class="card table-responsive{-sm|-md|-lg|-xl}" >
<div class="card-body  table-responsive-sm table-responsive-md table-responsive-lg table-responsive-sm table-responsive-xl">

<?php
             

                $query = "SELECT * FROM tbl_reply WHERE comment_id ='$idp' ";
                $query_run = mysqli_query($connection, $query);
            ?>
                    <table id="datatableid" class="table table-bordered table-dark table-hover " style="margin-top: 60px;">
                        <thead>
                            <tr>
                            <th scope="col">Package ID</th>
                                <th scope="col"> ID</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">CONTENT</th>
                                <th scope="col">DATE TIME</th>                                    
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
                            <td> <?php echo $row['reply_id']; ?> </td>
                                <td> <?php echo $row['comment_id']; ?> </td>
                                <td> <?php echo $row['email']; ?> </td>
                                <td> <?php echo $row['replies']; ?> </td>
                                <td> <?php echo $row['timestamp']; ?> </td>
                                
                              <!--  <td>
                                    <button type="button" class="btn btn-info viewbtn"> VIEW </button>
                                </td>-->
                              <!--  <td>
                                    <form action="" method="post">
                                    <button type="submit" name="vreply" id="vreply" value=" <td> <?php //echo $row['reply_id']; ?> </td>" class="btn btn-danger editbtn">DELETE</button>
                                    </form>
                                </td>-->
                               
                            </tr>
                        </tbody>
                        <?php           
                    }
                }
                else 
                {
                    echo "No Reply Found";
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

