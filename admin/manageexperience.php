<?php
session_start();
include('include/db.php');
if(strlen($_SESSION['alogin'])==0)
{
	header('location:login.php');
}
else{
	if (isset($_POST['submit'])) {
		$id=$_GET['uid'];
		$subject=$_POST['subject'];
		$company=$_POST['company'];
		$start=$_POST['start'];
		$end=$_POST['end'];
		$details=$_POST['details'];
		$sql="UPDATE tbl_experience SET subject='$subject',company='$company',start='$start',end='$end',details='$details' WHERE id='$id'";
		$query=mysqli_query($con,$sql);
		if ($query) {
echo "<script>alert('Update Successfully!!')</script>";
echo "<script>document.location='showexperience.php'</script>";
}else{
echo "<script>alert('Not Updated Successfully!!')</script>";
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
				  <i class="mdi mdi-book-open-variant menu-icon"></i>
			</span>
			Update Education
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
						<h4 class="card-title">Update Education</h4>
						<p class="card-description">
							Update Education
						</p>
						<?php
						$id=$_GET['uid'];
						$sql="SELECT * FROM tbl_experience WHERE id='$id'";
						$query=mysqli_query($con,$sql);
						while ($result=mysqli_fetch_array($query)) {
						# code...
						?>
						<form class="forms-sample" method="post" action="" enctype="multipart/form-data">
							<div class="form-group">
								<label>Subject:</label>
								<input type="text" class="form-control" name="subject" value="<?php echo $result['subject']; ?>">
							</div>
							<div class="form-group">
								<label>Company Name:</label>
								<input type="text" class="form-control" name="company" value="<?php echo $result['company'] ?>">
							</div>
							<div class="form-group">
								<label >Start From:</label>
								<input type="text" name="start" class="form-control" value="<?php echo $result['start']; ?>">
							</div> <div class="form-group">
							<label >End To:</label>
							<input type="text" name="end" class="form-control" value="<?php echo $result['end']; ?>">
						</div>
						<div class="form-group">
							<label >Education Details</label>
							<textarea class="form-control" name="details" rows="4">
							<?php echo $result['details']; ?>
							</textarea>
						</div>
						<button type="submit"  name="submit" class="btn btn-gradient-primary mr-2">Update</button>
						<button class="btn btn-light">Cancel</button>
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