<?php
session_start();
include('include/db.php');
if(strlen($_SESSION['alogin'])==0)
{
	header('location:login.php');
}
else{
	if (isset($_POST['submit'])) {
		$username=$_SESSION['alogin'];
		$password=md5($_POST['password']);
		$newpassword=md5($_POST['newpassword']);
		$sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
		$query=mysqli_query($con,$sql);
		$num=mysqli_num_rows($query);
		if ($num>0) {
			$usql="UPDATE tbl_admin SET password='$newpassword' WHERE username='$username'";
			$uquery=mysqli_query($con,$usql);
			if ($uquery) {
				echo"<script>alert('Password Change Successfully')</script>";
			}
			else{
				echo"<script>alert('Password Not Change Successfully')</script>";
			}

		}else{
			echo"<script>alert('Current Not match!!')</script>";
		}

	}
	?>
	 <script type="text/javascript">
        function valid()
        {
            if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
            {
                alert("New Password and Confirm Password Field do not match  !!");
                document.chngpwd.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>
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
										<form action="" method="post"  onSubmit="return valid();" name="chngpwd">
											<div class="form-group">
												<label for="">Current Password</label>
												<input type="password" name="password" class="form-control">
											</div>

											<div class="form-group">
												<label for="">New Password</label>
												<input type="password" name="newpassword" class="form-control">
											</div>

											<div class="form-group">
												<label for="">Confirm Password</label>
												<input type="password" name="confirmpassword" class="form-control">
											</div>
											<input type="submit" class="btn btn-success" name="submit" value="Change Password">

										</form>
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