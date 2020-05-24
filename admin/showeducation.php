<?php
session_start();
include('include/db.php');
if(strlen($_SESSION['alogin'])==0)
{
	header('location:login.php');
}
else{
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
								Manage Education
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
												<th>Subject</th>
												<th>Description</th>
												<th>Institution Name</th>
												<th>Start</th>
												<th>End</th>
												<th>Action</th>
											</tr>
											<?php
											$sql="SELECT * FROM tbl_education";
											$query=mysqli_query($con,$sql);
											while ($result=mysqli_fetch_array($query)) {
										# code...
												
												?>
												<tr>
													<td><?php echo $result['Subject']; ?></td>
													<td><?php echo $result['details']; ?></td>
													<td><?php echo $result['instituition']; ?></td>
													<td><?php echo $result['start']; ?></td>
													<td><?php echo $result['end']; ?></td>
													<td>
														<a href="manageeducation.php?uid=<?php echo $result['id']; ?>" class="btn btn-success">
															Update
														</a>
													</td>
													
												</tr>
											<?php  } ?>
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