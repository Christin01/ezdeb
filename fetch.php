<?php
$connect = mysqli_connect("localhost", "root", "", "ezdeb");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM package 
	WHERE name LIKE '%".$search."%'
	OR category LIKE '%".$search."%' 
	OR developer LIKE '%".$search."%' 
	OR description LIKE '%".$search."%' 
	";
}
else
{
	$query = "
	SELECT * FROM package ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table class="table table bordered">
						<tr>
							<th>Name</th>
							<th>category</th>
							<th>developer</th>
							<th>description</th>
							
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["name"].'</td>
				<td>'.$row["category"].'</td>
				<td>'.$row["developer"].'</td>
				<td>'.$row["description"].'</td>
			
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>