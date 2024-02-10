<?php

if(isset($_POST['submit'])){

	include 'config.php';


	$fname = $_POST['fname'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$discount = $_POST['discount'];
	$descrip = $_POST['descrip'];
	$pic = $_FILES['pic']['name'];

	move_uploaded_file($_FILES['pic']['tmp_name'], '../img/' .$_FILES['pic']['name']);

	$sql = "INSERT INTO fooditem(foodname,price,categ,discount,	dscrip,img)VALUES('$fname','$price','$category', '$discount', '$descrip', '$pic')";

	if(mysqli_query($conn , $sql)){
		echo "<script>
				alert('Food Added Successfully');
				window.location = 'http://localhost/phpsixd-jay/food.php';
		</script>";
	}else{
		echo "error" .mysqli_error($conn);
	}
}








?>