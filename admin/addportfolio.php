<?php
session_start();
include('include/db.php');
if(strlen($_SESSION['alogin'])==0)
{
  header('location:login.php');
}
else{
  if (isset($_POST['submit'])) {
    $field=$_POST['field'];
    $picture_name=$_FILES['pimage']['name'];
    $picture_type=$_FILES['pimage']['type'];
    $picture_tmp_name=$_FILES['pimage']['tmp_name'];
    $picture_size=$_FILES['pimage']['size'];
    if($picture_type=="image/jpeg" || $picture_type=="image/jpg" || $picture_type=="image/png" || $picture_type=="image/gif")
    {
      if($picture_size<=50000000){

        $pic_name=time()."_".$picture_name;
        move_uploaded_file($picture_tmp_name,"portfolio/".$pic_name);
        $sql="INSERT INTO tbl_portfolio(pimage,field)VALUES('$pic_name','$field')";
        $query=mysqli_query($con,$sql);
        if ($query) {
          echo "<script>alert('Inserted Successfully!!')</script>";
        }else{
          echo "<script>alert('Data Inserted Not Successfully!!')</script>";
        }  }else{
          echo "<script>alert('Image must be less than 5MB!!')</script>";
        } }else{
          echo "<script>alert('Invalid Image Format!!')</script>";
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
                <i class="mdi mdi-file-image menu-icon"></i>
              </span>
              Add Portfolio
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
                  <h4 class="card-title">Add Portfolio</h4>
                  <p class="card-description">
                    Add Portfolio
                  </p>
                  <form class="forms-sample" method="post" action="" enctype="multipart/form-data">
                    <div class="form-group">
                      <label>Name:</label>
                      <input type="file" class="form-control" name="pimage" >
                    </div>
                    
                    <div class="form-group">
                      <label for="">Working Sector</label>
                      <select name="field" id="" class="form-control">
                        <option>Select Your Work Area</option>
                        <option value="1">Font-End Development</option>
                        <option value="2">Wordpress Development</option>
                        <option value="3">PHP Developer</option>
                        <option value="4">Laravel Developer</option>
                      </select>
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