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
		$name=$_POST['name'];
		$details=$_POST['details'];
		$field=$_POST['field'];
	
		$sql="UPDATE tbl_workfield SET name='$name',details='$details',field='$field' WHERE id='$id'";
		$query=mysqli_query($con,$sql);
		if ($query) {
			echo "<script>alert('Update Successfully!!')</script>";
			echo "<script>document.location='showworking.php'</script>";
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
			 <i class="mdi mdi-laptop menu-icon"></i>
		</span>
		Manage Work Details
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
				$sql="SELECT * FROM tbl_workfield WHERE id='$id'";
				$query=mysqli_query($con,$sql);
				while ($result=mysqli_fetch_array($query)) {
			# code...
					?>
					<form class="forms-sample" method="post" action="" enctype="multipart/form-data">
						<div class="form-group">
							<label>Name:</label>
							<input type="text" class="form-control" name="name" value="<?php echo $result['name']; ?>">
						</div>
						<div class="form-group">
							<label>Work Details:</label>
							<input type="text" class="form-control" name="details" value="<?php echo $result['details'] ?>">
						</div>
						<div class="form-group">
							<label for="">Working Sector</label>
							<select name="field" id="" class="form-control">

								<option value="<?php echo $result['field'] ?>">
									<?php $st=$result['field'];
									if ($st==1) {?>
										Font End Developer
										<?php
									}elseif ($st==2) { ?>
										Wordpress Developer
									<?php }elseif ($st==3) {  ?>
										PHP Developer
									<?php }elseif ($st=4) { ?>
										Laravel Developer
									<?php	}
									?>
								</option>
								<option value="1">Font-End Development</option>
								<option value="2">Wordpress Development</option>
								<option value="3">PHP Developer</option>
								<option value="4">Laravel Developer</option>
							</select>
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