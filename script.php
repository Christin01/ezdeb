<?php 
	require "functions1.php";

	if(isset($_POST['category'])){
		$category = $_POST['category'];

		if($category === ""){
			$products = getAllProducts();
		}else{
			$products = getProductsByCategory($category);
		}
		echo json_encode($products);
	}