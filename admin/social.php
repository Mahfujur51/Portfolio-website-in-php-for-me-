<?php
session_start();
include('include/db.php');
if(strlen($_SESSION['alogin'])==0)
{
	header('location:login.php');
}
else{
	if (isset($_POST['submit'])) {
		
		$fb=$_POST['fb'];
		$tw=$_POST['tw'];
		$insta=$_POST['insta'];
		$linkdin=$_POST['linkdin'];
		
		$sql="UPDATE tbl_social SET fb='$fb',tw='$tw',insta='$insta',linkdin='$linkdin' WHERE id='1'";
		$query=mysqli_query($con,$sql);
		if ($query) {
			echo "<script>alert('Update Successfully!!')</script>";

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
						 <i class="mdi mdi-access-point menu-icon"></i>
					</span>
					Social Update
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
							<h4 class="card-title">Update social</h4>
							<p class="card-description">
							Update social
							</p>
							<?php
							$sql="SELECT * FROM tbl_social WHERE id='1'";
							$query=mysqli_query($con,$sql);
							while ($result=mysqli_fetch_array($query)) {
			# code...
								?>
								<form class="forms-sample" method="post" action="" enctype="multipart/form-data">
									<div class="form-group">
										<label>Facebook:</label>
										<input type="text" class="form-control" name="fb" value="<?php echo $result['fb']; ?>">
									</div>

									<div class="form-group">
										<label >Twitter:</label>
										<input type="text" name="tw" class="form-control" value="<?php echo $result['tw']; ?>">
									</div> 
									<div class="form-group">
										<label >Instagram:</label>
										<input type="text" name="insta" class="form-control" value="<?php echo $result['insta']; ?>">
									</div><div class="form-group">
										<label >LinkDin:</label>
										<input type="text" name="linkdin" class="form-control" value="<?php echo $result['linkdin']; ?>">
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