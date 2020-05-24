<?php
session_start();
include('include/db.php');
if(strlen($_SESSION['alogin'])==0)
{
header('location:login.php');
}
else{
	if (isset($_GET['delid'])) {
		$id=$_GET['delid'];
		$sql="DELETE FROM tbl_portfolio WHERE id='$id'";
		$query=mysqli_query($con,$sql);
		if ($query) {
			echo"<script>alert('Deleted successfully!!')</script>";
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
			Education
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
					<h4 class="card-title">Show Your decription</h4>
					<p class="card-description">
						Show decription
					</p>
					<table class="table">
						<tr>
							<th>Sl No</th>
							<th>Working Field</th>
						
							<th>Image</th>
							<th>Action</th>
						</tr>
						<?php
						$sql="SELECT * FROM tbl_portfolio";
						$query=mysqli_query($con,$sql);
						$cont=1;
						while ($result=mysqli_fetch_array($query)) {
					# code...
							
							?>
							<tr>
								<td><?php echo $cont; ?></td>
								<td>
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

												
								</td>
								<td><img src="portfolio/<?php echo $result['pimage']; ?>" height="200px" width="200px" ></td>
								
								<td>
									<a href="manageportfolio.php?uid=<?php echo $result['id']; ?>" class="btn btn-success">
										Update
									</a>

									<a href="?delid=<?php echo $result['id']; ?>" class="btn btn-danger" onclick="return confirm('Are you sure to delete!!')">
										Delete
									</a>
								</td>
								
							</tr>
						<?php $cont++; } ?>
					</table>
					
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