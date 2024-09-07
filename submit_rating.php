<?php
session_start();
//submit_rating.php                   
$pid=$_SESSION['pid'];
$connect = new PDO("mysql:host=localhost;dbname=ezdeb", "root", "");

if(isset($_POST["rating_data"]))
{
	/*$data = array(
		':user_name'		=>	$_POST["user_name"],
		':user_rating'		=>	$_POST["rating_data"],
		':user_review'		=>	$_POST["user_review"]
		//':datetime'			=>	time()
	);*/
//pid =$pid ANDuser_name =$uname;
//$query = "SELECT * FROM review_table WHERE user_name = $uname; ";
/*
$query ="SELECT *from review_table where pid= $user_review ;";
	$result = $connect->prepare($query);
	$result->execute();
	$r1=$result->fetchAll();	
if($r1){
	echo"already posted";
	//die();
	$result->closeCursor();
}
else {
	// row does not exist  
	$query = "INSERT INTO review_table (user_name, user_rating, pid ) VALUES (:user_name, :user_rating, :user_review)";
	$statement = $connect->prepare($query);
	$statement->execute($data);
	echo "Your Review & Rating Successfully Submitted";
}
*/

$user_name =$_POST["user_name"];
$user_rating=$_POST["rating_data"];
$user_review =$_POST["user_review"];
if($user_rating==0){
	$user_rating=1;
}

$conn= new mysqli('localhost','root','','ezdeb');
 if($conn->connect_error) {
   echo"<script> alert('Something error occured');</script>";
 }

$sql = "SELECT *from review_table where user_name= '$user_name' and pid ='$user_review' ";  // check if oder  in db
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
$count = mysqli_num_rows($result); 

if($count >= 1){  
	$query = " UPDATE `review_table` SET `user_rating`='$user_rating' where user_name= '$user_name' and pid ='$user_review' ";
	$conn->query($query);
	echo"Your Review & Rating Successfully Updated";
}
  elseif($count==0)
  {
	$q="INSERT INTO review_table (user_name, user_rating, pid ) VALUES ('$user_name','$user_rating','$user_review')";
	$conn->query($q);
	//header('Refresh:1; myoder.php');
	//header("Location:myoder.php");
	echo"Your Review & Rating Successfully Submitted"; 
  }

}

if(isset($_POST["action"]))
{
	
	$average_rating = 0;
	$total_review = 0;
	$five_star_review = 0;
	$four_star_review = 0;
	$three_star_review = 0;
	$two_star_review = 0;
	$one_star_review = 0;
	$total_user_rating = 0;
	$review_content = array();

	$query = "SELECT * FROM review_table WHERE pid =$pid;";
// WHERE pid = 'pid'  ORDER BY review_id DESC
	$result = $connect->query($query, PDO::FETCH_ASSOC);

	
	foreach($result as $row)
	{
		$review_content[] = array(
			//'user_name'		=>	$row["user_name"],
			//'user_review'	=>	$row["user_review"],
			'rating'		=>	$row["user_rating"],
			//'datetime'		=>	date('l jS, F Y h:i:s A', $row["datetime"])
		);

		if($row["user_rating"] == '5')
		{
			$five_star_review++;
		}

		if($row["user_rating"] == '4')
		{
			$four_star_review++;
		}

		if($row["user_rating"] == '3')
		{
			$three_star_review++;
		}

		if($row["user_rating"] == '2')
		{
			$two_star_review++;
		}

		if($row["user_rating"] == '1')
		{
			$one_star_review++;
		}

		$total_review++;

		$total_user_rating = $total_user_rating + $row["user_rating"];

	}

	$average_rating = $total_user_rating / $total_review;

	$output = array(
		'average_rating'	=>	number_format($average_rating, 1),
		'total_review'		=>	$total_review,
		'five_star_review'	=>	$five_star_review,
		'four_star_review'	=>	$four_star_review,
		'three_star_review'	=>	$three_star_review,
		'two_star_review'	=>	$two_star_review,
		'one_star_review'	=>	$one_star_review,
		'review_data'		=>	$review_content
	);
	
	echo json_encode($output);
}

?>