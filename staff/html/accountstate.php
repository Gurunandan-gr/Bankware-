<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

$cid = $_GET['id'];
$stmt = $admin->ret("SELECT * FROM `acust` WHERE `cid`='$cid' ");
$row1 = $stmt->fetch(PDO::FETCH_ASSOC);

if(!isset($_SESSION['aid']))
{
  $admin->redirect('slogin');
}
$id=$_SESSION['aid'];
$stmt=$admin->ret("SELECT * FROM `astaff` WHERE `sid`='$id'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);


?>
<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title></title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
    <style>
    .print-div {
      padding: 20px;
      background-color: #f2f2f2;
    }
  </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
        <?php include 'sidebar.php';
        ?>

        
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="bx bx-menu bx-sm"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              <!-- Search -->
              <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                  <i class="bx bx-search fs-4 lh-0"></i>
                  <input
                    type="text"
                    class="form-control border-0 shadow-none"
                    placeholder="Search..."
                    aria-label="Search..."
                  />
                </div>
              </div>
              <!-- /Search -->

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- Place this tag where you want the button to render. -->
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                      <a class="dropdown-item" href="#">
                        <div class="d-flex">
                          <div class="flex-shrink-0 me-3">
                            <div class="avatar avatar-online">
                              <img src="../assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <span class="fw-semibold d-block"></span>
                            <small class="text-muted"></small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                  
                    
                    
                    <li>
                      <div class="dropdown-divider"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="slogout.php">
                        <i class="bx bx-power-off me-2"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div style="display: flex;align-items:center">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Account Statement</h4>
              <div style="display: flex; justify-content: flex-end; margin-left:700px;">
              <button class="btn btn-success" onclick="printDiv('print-div')">Print</button>
</div>
                </div>
              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl" id="print-div">
                  <div class="card mb-4" >
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0"></h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">


                      <form action="../../controller/deposite1.php" method="POST">
                  

            <div class="row">
            <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Ac Holder Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" value="<?php echo $row1['cname'] ;?> "/>
                            <hr>
                          </div>
                        

                          <label class="col-sm-2 col-form-label" for="basic-default-name">Account Number</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" value="<?php echo $row1['acno'] ;?> "/>
                            <hr>
                          </div>

                          <label class="col-sm-2 col-form-label" for="basic-default-name">Date of Ac Created</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" value="<?php echo $row1['doo'] ;?> "/>
                            <hr>
                          </div>

                          <label class="col-sm-2 col-form-label" for="basic-default-name">Total Balance</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="basic-default-name" value="<?php echo $row1['total'] ;?> "/>
                            <hr>
                          </div>
                        
                        
                        
                       


                                              
</form>


<div>
    <table class="table">
        <tr>
            <th>Date</th>
            <th>Description</th>
            <th>Credit</th>
            <th>Debit</th>
            <th>Balance</th>
        </tr>
        <tbody>
          <?php
          $balance = 0;
          $stmt=$admin->ret("SELECT * FROM (SELECT * FROM `deposite` WHERE `cid`='$cid' UNION SELECT * FROM `withdraw` WHERE `cid`='$cid') u ORDER BY ddate ASC");
          while($row=$stmt->fetch(PDO::FETCH_ASSOC))
          {
            ?>
            <tr>  
              <td><?php echo $row['ddate']?></td>                    
              <td><?php echo $row['dstatus']?></td>
              <?php
            if($row['dstatus']=='Deposited'){
              $balance = $balance + $row['amt'];
              ?>
              <td>₹<?php echo $row['amt'];?></td>
              <td>---</td>
              <?php
            }
            else{
              $balance = $balance - $row['amt'];
              ?>
                 <td>---</td>
              <td>₹<?php echo $row['amt']?></td>

<?php
            }
              ?>
           
            <td>₹<?php echo $balance; ?></td>
            <?php } ?>
            </tr>
            
                      
</tbody>


                     
                  
    </table>
</div>
                          
                        
                            
                          
                        
            <!-- / Content -->

            <!-- Footer -->
           
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->
<script>
   function printDiv(divId) {
      var printContents = document.getElementById(divId).innerHTML;
      var originalContents = document.body.innerHTML;

      document.body.innerHTML = printContents;
      window.print();

      document.body.innerHTML = originalContents;
    }
</script>
    

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>