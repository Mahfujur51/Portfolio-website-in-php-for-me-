<?php
session_start();
include('include/db.php');
if(strlen($_SESSION['alogin'])==0)
{
  header('location:login.php');
}
else{
  if (isset($_POST['submit'])) {
    $subject=$_POST['subject'];
    $company=$_POST['company'];
    $start=$_POST['start'];
    $end=$_POST['end'];
    $details=$_POST['details'];
    $sql="INSERT INTO tbl_experience (subject,company,start,end,details) VALUES('$subject','$company','$start','$end','$details')";
    $query=mysqli_query($con,$sql);
    if ($query) {
      echo "<script>alert('Inserted Successfully!!')</script>";
    }else{
       echo "<script>alert('Not Inserted Successfully!!')</script>";

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
                    <h4 class="card-title">Add Experice</h4>
                    <p class="card-description">
                      Add Experience
                    </p>
                    <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                      <div class="form-group">
                        <label>Subject:</label>
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                      </div>
                      <div class="form-group">
                        <label>Company Name:</label>
                        <input type="text" class="form-control" name="company" placeholder="Enter Company Name">
                      </div>
                      <div class="form-group">
                        <label >Start From:</label>
                        <input type="text" name="start" class="form-control" placeholder="Start From">
                      </div> <div class="form-group">
                        <label >End To:</label>
                        <input type="text" name="end" class="form-control" placeholder="End">
                      </div>
                      <div class="form-group">
                        <label >Education Details</label>
                        <textarea class="form-control" name="details" rows="4"></textarea>
                      </div>
                      <button type="submit"  name="submit" class="btn btn-gradient-primary mr-2">Submit</button>
                      <button class="btn btn-light">Cancel</button>
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