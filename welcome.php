<?php session_start();
include_once('includes/config.php');
if (strlen($_SESSION['id']==0)) {
  header('location:logout.php');
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard |mkopo lms</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        <link href="mkopo-assets/vendor/animate.css/animate.min.css" rel="stylesheet">
        <link href="mkopo-assets/vendor/aos/aos.css" rel="stylesheet">
        <link href="mkopo-assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link href="mkopo-assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <link href="mkopo-assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
        <link href="mkopo-assets/vendor/remixicon/remixicon.css" rel="stylesheet">
        <link href="mkopo-assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
        <link href="mkopo-assets/css/style.css" rel="stylesheet">


    </head>

    
    <body class="sb-nav-fixed">
    <!-- <?php include './includes/nav.php';?> -->
    <!-- navigation start -->
    <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <div class="container"><h1 class="logo me-auto  "><a href="#">Mkopo ChapChap</a></h1></div>
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="active" href="./"> <i class="fa-solid fa-house "></i>Home</a></li>
          <li><a href="./views/pricing.php">pricing</a></li>
          <li><a href="./views/features.php">Features</a></li>
          <li><a href="./views/contact.php">Contact</a></li>
          <!-- <li><a href="admin">Admin</a></li>-->
          <li><a href="#"  data-toggle="modal" data-target="#exampleModalCenter">    Request New loan</a></li> 
          <!-- <li><a href="signup.php">Register</a></li> -->
          <li><a href="./views/calculate.php">calculate loan</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
</div>
</header>

    <!-- navigation end -->
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4 text-center fw-bold">Dashboard</h1>
                        <hr />
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->

                        <?php 
                        $userid=$_SESSION['id'];
                        $query=mysqli_query($con,"select * from users where id='$userid'");
                        while($result=mysqli_fetch_array($query))
                        {?>                        
                        <div class="row" >
                            <div class="col-xl-5 col-md-6" >
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Welcome Back <?php echo $result['fname']. $result [ 'lname' ];?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="profile.php">View Profile</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-md-6" >
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body text-center"> <?php echo $result['fname']. $result [ 'lname' ];?></div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="profile.php">my Loans</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <?php } ?>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
renew  loan status
</button>

                        </div>


                        
              
                        </div>
                   
                    </div>
                </main>

                <!-- modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
  Apply for new loan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">New Loan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted"> your email is secure with us</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">loan type</label>
    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="loan amount">
  </div>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01">
    <label class="custom-file-label" for="inputGroupFile01">upload your ID</label>
  </div>

  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">agree with loan terms</label>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

                <!-- end modal -->
          <?php include('includes/footer.php');?>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
