<?php
session_start();
include('include/db.php');
if(strlen($_SESSION['alogin'])==0)
{
	header('location:login.php');
}
else{
	if (isset($_GET['rid'])) {
		$id=$_GET['rid'];
		$status=1;
		$sql="UPDATE tbl_contact SET status='$status' WHERE id='$id'";
		$query=mysqli_query($con,$sql);
		if($query){
			echo "<script>alert('Message Read Successfully Now You Can Delete')</script>";
		}
		# code...
	}
	if (isset($_GET['delid'])) {
		$id=$_GET['delid'];
		$sql="DELETE FROM tbl_contact  WHERE id='$id'";
		$query=mysqli_query($con,$sql);
		if ($query) {
			echo "<script>alert('Message Delete Successfully')</script>";
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
				<h4 class="card-title">Show Your Contact Message</h4>
				<p class="card-description">
					Show  Message
				</p>
				<table class="table">
					<tr>
						<th>Subject</th>
						<th>Name</th>
						<th>Email</th>
						<th>Message</th>
						<th>Status</th>
					
					</tr>
					<?php
					$sql="SELECT * FROM tbl_contact";
					$query=mysqli_query($con,$sql);
					while ($result=mysqli_fetch_array($query)) {
				# code...
						
						?>
						<tr>
							<td><?php echo $result['subject']; ?></td>
							<td><?php echo $result['name']; ?></td>
							<td><?php echo $result['email']; ?></td>
							<td><?php echo $result['message']; ?></td>
						

							<td>
							<?php $st=$result['status'];
								if ($st==0) { ?>

								<a href="?rid= <?php echo $result['id']; ?>" class=" btn btn-success">Read</a>
								<?php }else{


							 ?>
							 <a href="?delid= <?php echo $result['id']; ?>" onclick="return confirm('Are you sure to delete!!')" class="btn btn-danger">Delete</a>
							<?php } ?>

								
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