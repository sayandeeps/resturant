<?php

include 'include/header.php';
include 'include/sidebar.php';
include 'include/top-right.php';
?>


<div class="container-fluid">
	<div class="row mt-5 card-area">
	    <div class="col-12">
	    	<div class="row">
				<div class="col-12">
					<div class="col-12 mt-3">
						<div style="float: right;">
							<a href="foodview.php" class="btn btn-primary">View All Food Item</a>
						</div>
					</div>
				</div>
			</div>
			<form action="sql/addfood.php" method="POST" enctype="multipart/form-data">
				<div class="row">
					<div class="col-12">
						<h3 class="text-center pt-2">Add Food Item</h3><hr>
					</div>
				</div>
				<div class="row detaiils">
					<div class="col-md-4 col-sm-12">
						<label>Food Name</label>
						<input type="text" name="fname" placeholder="Enter Food Name" class="form-control">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>Price</label>
						<input type="number" name="price" placeholder="Enter Number" required class="form-control">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>Category</label>
						<select class="form-control" name="category">
							<option disabled selected value="">---Selected---</option>
							<option value="Veg">Veg</option>
							<option value="Non Veg">Non Veg</option>
						</select>
					</div>

				</div>
				<div class="row detaiils mt-4">
					<div class="col-md-4 col-sm-12">
						<label>Discount</label>
						<input type="text" name="discount" placeholder="Enter Discount Price" class="form-control">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>Description</label>
						<input type="text" name="descrip" placeholder="Enter Description" required class="form-control">
					</div>
					<div class="col-md-4 col-sm-12">
						<label>Image</label>
						<input type="file" name="pic" required="" class="form-control">
					</div>

				</div>
				<div class="row mt-4">
					<div class="col-md-4 col-sm-12">
						<input type="submit" name="submit" value="Add Food Details" class="btn btn-primary">
					</div>
				</div>

			</form>
		</div>
	</div>
</div>




<?php

include 'include/footer.php';

?>

<style>
	.card-area{
		height: 500px;
		background-color: #fff;
	}
	form input[type="text"]{
		width: 100%!important;
		margin-top: -0px!important;
		border-radius: 0px!important;
	}
	form input[type="number"]{
		border-radius: 0px!important;
	}
	form select{
		border-radius: 0px!important;
	}
	
</style>