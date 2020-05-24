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
              <i class="mdi mdi-home"></i>
            </span>
            Dashboard
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
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <?php 
                    $sql="SELECT * FROM tbl_contact WHERE status ='0'";
                    $query=mysqli_query($con,$sql);
                    $num=mysqli_num_rows($query);

                   ?>
                  <h4 class="font-weight-normal mb-3">Message
                  <i class="mdi mdi-chart-line mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php echo $num; ?></h2>
                  
                </div>
              </div>
            </div>
            <?php 
            $sql1="SELECT * FROM tbl_project";
            $query1=mysqli_query($con,$sql1);
            while ($result=mysqli_fetch_array($query1)) {
              # code...
            


             ?>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h4 class="font-weight-normal mb-3">Porject Working
                  <i class="mdi mdi-bookmark-outline mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php echo $result['projectworking'] ?></h2>
                 
                </div>
              </div>
            </div>
            <div class="col-md-4 stretch-card grid-margin">
              <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                  <img src="images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image"/>
                  <h4 class="font-weight-normal mb-3">Project Done
                  <i class="mdi mdi-diamond mdi-24px float-right"></i>
                  </h4>
                  <h2 class="mb-5"><?php echo $result['projectdone']; ?></h2>
                
                </div>
              </div>
            </div>
            <?php } ?>
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