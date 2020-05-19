<?php
error_reporting(0);
session_start();
include("include/db.php");
if (isset($_POST['submit'])) {
  $username=$_POST['username'];
  $password=md5($_POST['password']);
  $sql="SELECT * FROM tbl_admin WHERE username='$username' AND password='$password'";
  $query=mysqli_query($con,$sql);
  $num=mysqli_num_rows($query);
  if ($num>0) {
    $_SESSION['alogin']=$username;
    echo "<script>document.location='index.php'</script>";
  }else{
    echo "<script>alert('Invalid username OR Password')</script>";
  }
}
?>
<?php include("inc/header.php");?>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left p-5">
              <div class="brand-logo">
                <img src="images/logo.svg">
              </div>
              <h4>Hello! Login Here</h4>
              <h6 class="font-weight-light">Sign in to continue.</h6>
              <form class="pt-3" method="post" action="">
                <div class="form-group">
                  <input type="text" class="form-control form-control-lg" name="username" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" name="password" placeholder="Password">
                </div>
                <div class="mt-3">
                  <input type="submit" value="Login" name="submit" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn">
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <a href="#" class="auth-link text-black">Forgot password?</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
<?php include("inc/footer.php"); ?>