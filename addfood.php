<?php

if(isset($_POST['submit'])){

	include 'sql\config.php';


	$fname = $_POST['foodname'];
	$price = $_POST['price'];
	$category = $_POST['categ'];
	$discount = $_POST['discount'];
	$descrip = $_POST['dscrip'];
	$pic = $_FILES['img']['name'];

	move_uploaded_file($_FILES['img']['tmp_name'], '../img/' .$_FILES['img']['name']);

	$sql = "INSERT INTO fooditem(foodname,price,categ,discount,dscrip,img)VALUES('$fname','$price','$category', '$discount', '$descrip', '$pic')";

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