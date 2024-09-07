
<?php
//Start a session
//https://int-onlineapps.hud.ac.uk/index.aspx
    session_start(); 
    include('packnav2.php');
    include('comment/database/db_connect.php');
    include('login.php');
    include('signup.php');
    require ('functions.php');
?>
<head>
<script  type = "text/javascript" >/*
function preventBack() { window.history.forward(); }
setTimeout("preventBack()", 0);
window.onunload = function () { null };*/
</script>
<style>
.comment-dates {
      font-size: 14px;
      color: red;
      text-transform: lowercase;
      letter-spacing: 1px;
      margin-bottom: 0px;
      display: inline; 
  }
.pointer:hover {
  cursor: pointer;
}
textarea {
     border:none;
    border-bottom: 1px solid #1890ff;
    padding: -5px 10px;
    margin-bottom: 10px;
    width: 100%;
    outline: none;
    background: transparent;
    color: black;
    resize: none;
   }
textarea:focus{
  border-color: black;  
}
[placeholder]:focus::-webkit-input-placeholder {
    transition: text-indent 0.4s 0.4s ease; 
    text-indent: -100%;
    opacity: 1;
 }
 .circle-img {
 border-radius: 50%;
 height: 68px;
 width: 100px;
 overflow: hidden;
 display: flex;
 justify-content: center;
 align-items: center;
}
.circle-img-reply {
 border-radius: 50%;
 height: 50px;
 width: 50px;
 overflow: hidden;
 justify-content: center;
 align-items: center;
}
.dropdown-menu {
    min-width: 3rem;
    z-index: 9999;
    position: absolute;
}
.center {
  margin-top: 5px;
  position: absolute;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.first-five{
    display: none;
}
.contact-form-area {
  position: relative;
  z-index: 1; }

.progress-label-left
{
   float: left;
   margin-right: 0.5em;
   line-height: 1em;
}
.progress-label-right
{
    float: right;
    margin-left: 0.3em;
    line-height: 1em;
}
.star-light
{
	color:#e9ecef;
}

</style>  

</head>
<?php 
   // session_start();
     if(isset($_POST['logout'])) {
       unset($_SESSION['id']); ?>
       <script type="text/javascript"> window.setTimeout(function() { window.location.href='index.php'; }, 100); </script>
<?php } ?>

<div class="container">
<?php 
$conn= new mysqli('localhost','root','','ezdeb');
if($conn->connect_error) {
  echo"<script> alert('Something error occured');</script>";
}
 $vID = $_GET['id'];
 $_SESSION['pid'] =$vID;

 if($_SESSION['pid']==$vID){
  $_SESSION['pid'] =$vID;
 }
 else{
  unset($_SESSION['pid']);
  $_SESSION['pid'] =$vID;
 }
                //$videoID = 4;
$sql = mysqli_query($conn, "SELECT * FROM package WHERE id = '$vID'") or die()/*(mysqli_error())*/;
if ($sql->num_rows > 0) {
  # code...
  $data =  mysqli_fetch_array($sql);
  $title = $data['name'];
  $category = $data['category'];
  $developer=$data['developer'];
  $command=$data['command'];
  $description = $data['description'];
  $image=$data['image'];
  $id=$data['id'];
}?>  

<div class="card my-4">
   <div class="row no-gutters">
     <div class="col-md-3 ">
       <img  src = "./Admin/image/<?php echo $image;?>" class="card-img "  alt = "LOADING.."class="card-img " />
     </div>
     <div class="col-md-8">
       <div class="card-body">
          <h5 class="card-title">
          <?php echo $title;?>  <span class="badge badge-primary">New</span></h5>
          <p class="card-text">
            <span class="badge badge-pill badge-success"> <i class="fa fa-television"> <?php echo $category;?></i></span>
         </p>
         <p class="card-text" style="color:black">
           <?php echo $developer;?><br><hr>   
       </div>
         <p class="pl-2" style="color:black"><?php echo $description; ?></p>

<div  style=" background-color: #ffffff;padding: 9px;border-radius: 10px; margin: 12px 0;">  
<input style="font-size: 14px; padding: 2px; border-radius: 5px; border: 1px solid #000000;"   
type="text" onKeyDown="return false" autocomplete="off" id="<?php echo $id ?>" value="<?php echo $command ?>" />
<button style="font-size: 14px;padding: 5px 14px;background-color: #577eff;color: #ffffff;border: none;
border-radius: 5px;margin-left: 10px;" onclick="copy('<?php echo $id ?>')">Copy Command</button>
</div>
<!-- Script -->
<script>
let copy = (textId) => {
  document.getElementById(textId).select();
  document.execCommand("copy");
};
</script>


</div>        
<section class="post-details-area mb-60 ">
   <div class="container">
     <div class="row justify-content-center">
       <!-- Post Details Content Area -->
       <div class="col-12 col-lg-8 col-xl-7">
          <div class="post-details-content">
           <div class="blog-content justify-content-center ">
              <!-- <iframe width="630" height="345" src="https://www.youtube.com/embed/<?php echo "" //$video_link; ?>"></iframe>  Post Content -->                                                                                                                                    
             <div class="post-content mt-0">  
                <!-- <a style="color:red;" href="single-post.php" class="post-title mb-2"><?php echo ""// $title; ?></a>-->
                <!--  <div class="d-flex justify-content-between  mt-30">
                <!-- <div class="post-meta d-flex align-items-center">
                <a href="#" class="post-author">By Jane</a>
                <i class="fa fa-circle" aria-hidden="true"></i>
                <a href="#" class="post-date">Sep 08, 2018</a>   
                </div>-->
                <!-- <div class="post-meta d-flex ">-->
  <?php
   //connection to database is at functions.php file
    $page_post = $_GET['id'];
    //$page_post = 4;
    $query = "SELECT * FROM tbl_comment_post WHERE page_post = '$page_post'";
    $result = mysqli_query($con, $query);
     if ($result) { 
        // it return number of rows in the table. 
        $row = mysqli_num_rows($result);        
        // close the result. 
        mysqli_free_result($result); 
      }  
   ?>
  <!--<a style="color:black;" href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> <?php echo ""//$row; ?></a>
  <a style="color:black;" href="#"><i class="fa fa-eye" aria-hidden="true"></i> 42</a>
  <a style="color:black;" href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 7</a>-->
   </div>
  </div>
</div>
  </p>
<!-- <div class="mb-5">
<p class="card-text float-right">
<small class="text-muted"> <i class="fa fa-clock-o"></i> Last updated 3 mins ago</small></p>
</div>-->
</div>                            
</div>
</div>
</div>
<hr style="background-color:red;">      
<!-------------------------------------------------- Rating Content --------------------------------------------------->
 <div class="container">
   <div class="card">
       <div class="card-body">
    			<div class="row">
    				<div class="col-sm-4 text-center">
    					<h1 class="text-warning mt-4 mb-4">
    						<b><span id="average_rating">0.0</span> / 5</b>
    					</h1>
    					<div class="mb-3">
    						 <i class="fas fa-star star-light mr-1 main_star"></i>
                 <i class="fas fa-star star-light mr-1 main_star"></i>
                 <i class="fas fa-star star-light mr-1 main_star"></i>
                 <i class="fas fa-star star-light mr-1 main_star"></i>
                 <i class="fas fa-star star-light mr-1 main_star"></i>
	    				</div>
    					<h3><span id="total_review">0</span> Rating</h3>
    				</div>
    				<div class="col-sm-4">
    					<p>
                 <div class="progress-label-left"><b>5</b> <i class="fas fa-star text-warning"></i></div>
                 <div class="progress-label-right">(<span id="total_five_star_review">0</span>)</div>
                 <div class="progress">
                    <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="five_star_progress"></div>
                 </div>
             </p>
    					<p>
                 <div class="progress-label-left"><b>4</b> <i class="fas fa-star text-warning"></i></div>
                 <div class="progress-label-right">(<span id="total_four_star_review">0</span>)</div>
                 <div class="progress">
                   <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="four_star_progress"></div>
                 </div>               
             </p>
    					<p>
                  <div class="progress-label-left"><b>3</b> <i class="fas fa-star text-warning"></i></div>
                  <div class="progress-label-right">(<span id="total_three_star_review">0</span>)</div>
                  <div class="progress">
                   <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="three_star_progress"></div>
                  </div>               
             </p>
    					<p>
                 <div class="progress-label-left"><b>2</b> <i class="fas fa-star text-warning"></i></div>
                 <div class="progress-label-right">(<span id="total_two_star_review">0</span>)</div>
                 <div class="progress">
                   <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="two_star_progress"></div>
                 </div>               
             </p>
    					<p>
                 <div class="progress-label-left"><b>1</b> <i class="fas fa-star text-warning"></i></div>        
                 <div class="progress-label-right">(<span id="total_one_star_review">0</span>)</div>
                 <div class="progress">
                   <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" id="one_star_progress"></div>
                 </div>               
             </p>
    				</div>
            <?php if(!isset($_SESSION['id'])): ?>
    				<div class="col-sm-4 text-center">
    					<h3 class="mt-4 mb-3"></h3>
    				</div>
            <?php endif ?>
            <?php if(isset($_SESSION['id'])):?>
             <div class="col-sm-4 text-center">
    					 <h3 class="mt-4 mb-3">Add Rating Here</h3>
               <input type="hidden" value="<?php echo "$page_post" ?> " name="Load_data" id="Load_data" class="form-control" required />
    					 <button type="button" name="add_review" id="add_review" class="btn btn-primary">Rating</button>
    				 </div>
           <?php endif ?>
    			</div>
    	 </div>
   </div>
    	<!--<div class="mt-5" id="review_content"></div>-->
</div>
<!-- #####---------------------------------------- Post Details Area Start ##### ----------------------------------------->
<hr style="background-color:red;">   
<!--  <a href="#" class="post-cata cata-sm cata-danger">SHOW MORE</a>-->             
<!---------------------------------------------------- Section Title ------------------------------------------>
<div class="section-heading style-2" style="margin-bottom: 15px">
<h4>Reviews     <?php echo $row; ?></h4>     
<div class="dropup">
   <span style="float: right; color:#000; margin-top:-30px;" class="pointer" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">SORT BY <i class="fa fa-sort" aria-hidden="true"></i></span>
    <div class="dropdown-menu dropdown-menu-right">
       <a class="dropdown-item" href="#" id="newest" style="color:#db4437;">Newest</a>
       <a class="dropdown-item" href="#" id="oldest">Oldest</a>
   </div>
</div>
<div class="line"></div>
</div>   
<?php if(!isset($_SESSION['id'])): ?><br>
<a href="index.php"> <input type="button" class="btn btn-info btn-sm center" value="Login To Comment" /></a><br>                
  <?php endif ?>
<?php if(isset($_SESSION['id'])):?>
   
  
   <!-------------------------------------------- Post A Comment Area ---------------------------------------->
<div class="post-a-comment-area">
<!--------------------------------------------- Comment Form-------------------- ---------------------------->
   <div class="contact-form-area">
       <form method="post" action="" id="post_form">
           <div class="row">                             
               <div class="col-12">
                   <textarea name="post_content" id="post_content" class="comment" placeholder="Comment here 👻.."></textarea>
               </div>
                <div class="col-12">
                   <input type="hidden" name="action" value="insert" />
                   <input type="hidden" name="page_post" value="<?php echo $page_post;?>" />
                   <button type="button" class="btn btn-secondary btn-sm" id="cancel_comment" style="float: left; display: none;"> Cancel</button>
                   <input type="submit" name="share_post" id="share_comment" style="background-color:red;float: right;" class="btn btn-danger btn-sm" value="Comment" />
                 </div>
           </div>
       </form>
    </div>
 <?php endif ?>
 </div>
<!----------------------------------------------------------- Comment Area Start-------------------------- -->
<div class="comment_area clearfix mb-30">                             
   <div id="post_list"></div>
     <div id="older_comment" style="display: none;">
       <div id="loader" align ="center"><img src="loader.gif" alt="Loader"></div>   
     </div> <br>
     <?php 
        if ($row >= 5) {
          echo '<a href="#" class="post-cata cata-sm cata-danger center view_more">View More</a>';
        }
     ?>
</div>
  </div><!-- nop-->
   </div>
     </div>
       </div>


  <!--------------------------------------- Sidebar Widget ----------------------------------------------------->

<!-- Modal -->
<div class="modal fade bd-example-modal-sm" id="myModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm"  >
    <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
         <p class="modal-title" id="exampleModalLabel">Report Comment</p><hr>
       </div>
        <div class="modal-body" style="color: #000; padding-left: 17px;">
          <p class="responseMsg"></p>
         <form id="radio_form">
           <label><input type="radio" id="report" name="report" value="Unwanted Commercial Content or Spam"/> Unwanted Commercial Content or Spam</label><br>
           <label><input type="radio" id="report" name="report" value="Pornography or Sexually Explicit Material"/> Porno or Sexually Explicit Material</label><br>
           <label><input type="radio" id="report" name="report" value="Child Abuse"/> Child Abuse</label><br>
           <label><input type="radio" id="report" name="report" value="Hate Speech or Graphic Violence"/> Hate Speech or Graphic Violence</label><br>
           <label><input type="radio" id="report" name="report" value="Harrassment or Bullying"/> Harrassment or Bullying</label><br>    
    
           <div class="modal-footer">
             <button type='button' class='btn btn-secondary btn-sm' data-dismiss="modal">
             <strong>Cancel</strong></button> 
             <button type='button' id="report_btn" class='btn btn-danger btn-sm' data-pageid="<?php echo $page_post; ?>">
              <strong>Report</strong></button>
          </form>     
       </div>
     </div>
  </div>
</div>
</div>
</div>

<!---modal form ends here --->
<?php if(isset($_SESSION['id'])){
$email1 =  $_SESSION['id'] ;
}
else{
$email1="guest";
} ?>
<div id="review_modal" class="modal" tabindex="-1" role="dialog">
   <div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	          <h5 class="modal-title">Submit Rating</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          	<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		 <i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
               <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
               <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
               <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
               <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="hidden" value="<?php echo "$email1" ?> "; name="user_name" id="user_name" class="form-control"  />
	        	</div>
	        	<div class="form-group">
              <input type="hidden" value="<?php echo "$page_post" ?> " name="pid" id="pid" class="form-control" />
	        	</div>
	   	     <div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
   </div>
</div>


</div>
</div>
</section>
<!---footer section-->
<section id="footer">
 <img src="images/wave2.png" class="footer-img">
 <div class="container">
    <div class="row">
        <div class="col-md-4 footer-box">
            <img src="images/demo-logo.png" class="footer-img">  
            <p>It is a long established fact that a reader will be distracted by the readable
            content of a page when looking at its layout. </p>
        </div>
        <div class="col-md-4 footer-box">
           <p><b>CONTACT US</b></p>
           <p> <i class="fa fa-map-marker"></i>EZ-DEB,ADOOR</p>
           <p><i class="fa fa-phone-square"></i> +91 78987676654</p>
           <p><i class="fa fa-envelope-open-o"></i>EZ-DEB@gmail.com</p>
        </div>
        <div class="col-md-4 footer-box">
            <p><b>contact us</b></p>
            <input type="email"class="form-control"placeholder="your email">
            <button type="button" class="btn btn-primary" >get in touch</button>
         </div>
    </div>
 </div>
    <hr><p class="copyright">website crifted by EZ DEB</p>
</section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
 integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <script src="jav.js"></script> 
</html>
<?php
 include('single-post-js.php'); 
?>
