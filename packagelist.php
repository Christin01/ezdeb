<?php
include('packnav.php');
include('login.php');
include('signup.php');
include "functions1.php" ;
?>


<div class="container">
<div class="row">  
 <?php
 $conn= new mysqli('localhost','root','','ezdeb');?>
 <select   id="products" name="products" class="form-select my-5  w-auto" >
				<option value="" selected="selected">All Packages</option>
				<?php
				$sql = "SELECT name FROM category";
				$resultset = mysqli_query($conn, $sql);
				while( $rows = mysqli_fetch_assoc($resultset) ) { 
				?>
				<option value="<?php echo $rows["name"]; ?>"><?php echo $rows["name"]; ?></option>
				<?php }	?>
			</select>
            
        
            <form action="search.php" method="post" class="navbar-form ms-auto input-group my-5 w-auto h-10" role="search" id="navBarSearchForm">
             
               <input name="search_text" id="search_text" type="text"  class="form-control border border-primary rounded-left" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
               <button type="submit" name="search" class="btn btn-primary rounded-left">search</button>
            
            </form>
            <div class="right">
              <h4>All Packages</h4>
             </div>
             
           </div>
       </div>


<div class="product-wrapper">
<?php
//$category=filter_input(INPUT_POST,'cat');   
    // $q="SELECT * FROM package";
    // $q="SELECT * FROM package WHERE category='".$category."'";
     /* $result = $conn->query($q);
      if($result->num_rows > 0){
       while ($rows=$result->fetch_assoc()){
        $name = $rows['name'];
        $details=$rows['description'];
        $developer=$rows['developer'];
        $command=$rows['command'];
        $id=$rows['id'];*/
        
        $products = getAllProducts();
        foreach ($products as $product) {
            
     ?>



    <div class="container">
        <div class="card my-3">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="card-body">
                        <h5 class="card-title">
                        <?php echo $product['name'] ?>   <span class="badge badge-primary">New</span></h5>
                        <p class="card-text">
                            <span class="badge badge-pill badge-success"> <i class="fa fa-television"></i> 
                            <?php echo $product['category'] ?>    </span>
                            <span class="badge badge-pill bs-color"> <i class="fa fa-tags"></i><?php echo $product['developer'] ?> </span>
                        </p>
                        <div class="mb-3">
                            <p class="card-text" style="color:black">
                              <?php echo $product['description'] ?> 
                            </p>
                        </div>

                        <div  style=" background-color: #ffffff;padding: 9px;border-radius: 10px; margin: 12px 0;">  
                        <input style="font-size: 14px; padding: 2px; border-radius: 5px; border: 1px solid #000000;"   
                             type="text" onKeyDown="return false" autocomplete="off" id="<?php echo $product['id'] ?>" value="<?php echo $product['command'] ?>" />
                             <button style="font-size: 14px;padding: 4px 14px;background-color: #577eff;color: #ffffff;border: none;
                            border-radius: 5px;margin-left: 3px;" onclick="copy('<?php echo $product['id'] ?>')"><i class="bi bi-clipboard"></i></button>
                       </div>
<!-- Script -->
<script>
let copy = (textId) => {
  document.getElementById(textId).select();
  document.execCommand("copy");
};
</script>
<br>
                        <form action="single-post.php" method="get">
                        <button style="width: 130px;" name="id" class="btn btn-primary btn-block "  value="<?php echo $product['id'] ?>;" >
                            <i class="fa fa-newspaper-o pr-2" ></i> Read more
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php  }?>
    </div>
    
    <script src="script.js"></script> <!-- Link to the javascript file -->   
    <?php
include('footer.php');
?>
