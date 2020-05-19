<?php
session_start();
include('include/db.php');
if(strlen($_SESSION['alogin'])==0)
{
	header('location:login.php');
}
else{
	if (isset($_POST['Update'])) {
		$name=$_POST['name'];
		$description=mysqli_real_escape_string($con,$_POST['description']);
		$email=$_POST['email'];
		$age=$_POST['age'];
		$phone=$_POST['phone'];
		$experience=$_POST['experience'];
		$location=$_POST['location'];
		$country=$_POST['country'];
		$freelancer=$_POST['freelancer'];
		$picture_name=$_FILES['image']['name'];
		$picture_type=$_FILES['image']['type'];
		$picture_tmp_name=$_FILES['image']['tmp_name'];
		$picture_size=$_FILES['image']['size'];
		if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
		{
			if($picture_size<=50000000){
				
				$pic_name=time()."_".$picture_name;
				move_uploaded_file($picture_tmp_name,"images/".$pic_name);
				$sql="INSERT INTO tbl_about(name,email,age,phone,experience,image,location,country,freelancer,description)VALUES('$name','$email','$age','$phone','$experience','$pic_name','$location','$country','$freelancer','$description')";
				$query=mysqli_query($con,$sql);
				if ($query) {
echo "<script>alert('Inserted Successfully!!')</script>";
}else{
echo "<script>alert('Data Inserted Not Successfully!!')</script>";
}
}else{
echo "<script>alert('Image must be less than 5MB!!')</script>";
}
} else{
echo "<script>alert('Invalid Image Format!!')</script>";
}
}
?>
<?php include("inc/header.php");?>
<body>
	<div class="container-scroller">
		<!-- partial:partials/_navbar.html -->
		<?php include("inc/navbar.php"); ?>
		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_sidebar.html -->
			<?php include("inc/sidebar.php"); ?>
			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">
					<div class="page-header">
						<h3 class="page-title">
						<span class="page-title-icon bg-gradient-primary text-white mr-2">
							<i class="mdi mdi-account-box-outline"></i>
						</span>
						About
						</h3>
						<nav aria-label="breadcrumb">
							<ul class="breadcrumb">
								<li class="breadcrumb-item active" aria-current="page">
									<span></span>Overview
									<i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
								</li>
							</ul>
						</nav>
					</div>
					<div class="row">
						<div class="col-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Add Details</h4>
									<p class="card-description">
										Add Details
									</p>
									<?php
									$id=$_GET['uid'];
									$sql="SELECT * FROM tbl_about WHERE id='$id'";
									$query=mysqli_query($con,$sql);
									while ($result=mysqli_fetch_array($query)) {
									# code...
									?>
									<form class="forms-sample" method="post" action="" enctype="multipart/form-data">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" name="name" value=" <?php echo $result['name']; ?> ">
										</div>
										<div class="form-group">
											<label>Email address</label>
											<input type="email" class="form-control" name="email"  value="<?php echo $result['email'];?>">
										</div>
										<div class="form-group">
											<label >Age</label>
											<input type="number" name="age" class="form-control" value="<?php echo $result['age'];?>">
										</div> <div class="form-group">
										<label >Mobile</label>
										<input type="text" name="phone" class="form-control" value="<?php echo $result['phone'];?>">
									</div>
									<div class="form-group">
										<label >Experience</label>
										<input type="text" name="experience" class="form-control" value="<?php echo $result['experience'];?>">
									</div>
									
									<div class="form-group">
										<label>Location</label>
										<input type="text" class="form-control"  name="location" value="<?php echo $result['location'];?>">
									</div>
									<div class="form-group">
										<label>Country</label>
										<input type="text" class="form-control"  name="country" value="<?php echo $result['country'];?>">
									</div>
									<div class="form-group">
										<label >Freelancer</label>
										<select name="freelancer" class="form-control">
											
											<option value="<?php echo $result['freelancer'];?>">
												<?php
												$st=$result['freelancer'];
												if ($st==1) {
													echo "Available";
												}else{
													echo "Unavailable";
												}
												?>
											</option>
											<option value="1">Available</option>
											<option value="0">Unavailable</option>
										</select>
									</div>
									<div class="form-group">
										<label >Textarea</label>
										<textarea class="form-control" name="description" rows="4">
										<?php echo $result['description']; ?>
										</textarea>
									</div>
									<div class="form-group">
										<label>Old Image</label>
										<img src="images/<?php echo $result['image'] ?>" width="200" height="200">
										<a href="change-image.php?id=<?php echo $result['id']; ?>" class="btn btn-info">Change Image</a>
									</div>
									<button type="submit"  name="Update" class="btn btn-gradient-primary mr-2">Update</button>
									
								</form>
								<?php
								} ?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- content-wrapper ends -->
			<!-- partial:partials/_footer.html -->
			<footer class="footer">
				<div class="d-sm-flex justify-content-center justify-content-sm-between">
					<span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?php echo Date("Y"); ?> All rights reserved.Mahfujur Rahman</span>
				</div>
			</footer>
			<?php include("inc/footer.php");?>
			<?php } ?>