<?php

if(isset($_POST['update'])){

	include 'config.php';


	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$price = $_POST['price'];
	$category = $_POST['category'];
	$discount = $_POST['discount'];
	$descrip = $_POST['descrip'];
	$pic = $_FILES['pic']['name'];


	move_uploaded_file($_FILES['pic']['tmp_name'], '../img/' .$_FILES['pic']['name']);

	$sql = "UPDATE fooditem SET foodname= '$fname', price= '$price', categ= '$category', discount= '$discount', dscrip= '$descrip', img= '$pic' WHERE id = '$id'";

	if(mysqli_query($conn , $sql)){
		echo "<script>
				
				window.location = 'http://localhost/phpsixd-jay/foodview.php';
		</script>";
	}else{
		echo "error" .mysqli_error($conn);
	}
}



?>