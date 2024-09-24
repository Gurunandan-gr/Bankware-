<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();

if(!isset($_SESSION['aid']))
{
  $admin->redirect('slogin');
}
$id=$_SESSION['aid'];
$stmt=$admin->ret("SELECT * FROM `astaff` WHERE `sid`='$id'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);


$id = $_GET['id'];
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
    <link rel="stylesheet" href="../assets/css/check.css" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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
<?php 
$stmt=$admin->ret("SELECT * FROM `acust` WHERE `cid`='$id'");
$row=$stmt->fetch(PDO::FETCH_ASSOC);
?>
          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light"></span>Apply for Loan</h4>

              <!-- Basic Layout & Basic with Icons -->
              <div class="row">
                <!-- Basic Layout -->
                <div class="col-xxl">
                  <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                      <h5 class="mb-0"></h5>
                      <small class="text-muted float-end"></small>
                    </div>
                    <div class="card-body">
<h1 class="mb-5">Get Loan....!!!!</h1>

                      <form action="../../controller/loantype.php"  method="POST" enctype="multipart/form-data" novalidate>
            <div class="row">


                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Applicant Name :</label>
                          <div class="col-sm-10">
                         
                            <input type="text" name="aname" value="<?php echo $row['cname']?>" class="form-control" id="basic-default-name"  required pattern="[a-zA-Z][a-zA-Z ]{2,}" readonly/>
                                <div class="invalid-feedback">
                  * Valid  name is required.
                </div>
                          </div>
                        </div>


                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Applicant Photo :</label>
                          <div class="col-sm-10">
                            <input type="file" name="photo" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Select Image .
                </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Applicant Occupation :</label>
                          <div class="col-sm-10">
                            <input type="text" name="occup" class="form-control" id="basic-default-name" required  pattern="[a-zA-Z][a-zA-Z ]{2,}" />
                                <div class="invalid-feedback">
                  * Valid  name is required.
                </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Income Source :</label>
                          <div class="col-sm-10">
                            <input type="text" name="source" class="form-control" id="basic-default-name" required pattern="[a-zA-Z][a-zA-Z ]{2,}"/>
                                <div class="invalid-feedback">
                  * Income Source is required.
                </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Monthly Income :</label>
                          <div class="col-sm-10">
                            <input type="number" name="income" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Monthly Income is required.
                </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Age:</label>
                          <div class="col-sm-10">
                            <input type="text" name="age" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Valid  Age is required.
                </div>
                          </div>
                        </div>


                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Applicant Qulaification :</label>
                          <div class="col-sm-10">
                            <input type="text" name="quli" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Applicant Qulaification is required.
                </div>
                          </div>
                        </div>

                         

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Issue No :</label>
                          <div class="col-sm-10">
                            <input type="text" name="ino" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Issue No is required.
                </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Issue Date :</label>
                          <div class="col-sm-10">
                            <input type="date" name="idate" class="form-control" id="basic-default-name" min="<?php echo date('Y-m-d')?>"  required />
                            <div class="invalid-feedback">
                  * Issue Date is required.
                </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Surety1 Address :</label>
                          <div class="col-sm-10">
                            <input type="text" name="s1ad" class="form-control" id="address1"  required onblur="validateAddress()"/>
                            <div class="invalid-feedback">
                  * Surety1 Address is required.
                </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Surety1 Phone:</label>
                          <div class="col-sm-10">
                            <input type="text" name="s1ph" id="phone1" class="form-control" required  pattern="['0-9]{10}" onblur="validatePhoneNumbers()"/>
                              <div class="invalid-feedback">
                    * Surety1 Phone Number is required.
                  </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Surety2 Address:</label>
                          <div class="col-sm-10">
                            <input type="text" name="s2ad" class="form-control" id="address2" required onblur="validateAddress()"/>
                            <div class="invalid-feedback">
                  * Surety2 Address is required.
                </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Surety2 Phone:</label>
                          <div class="col-sm-10">
                            <input type="text" name="s2ph" id="phone2" class="form-control"  required  pattern="['0-9]{10}" onblur="validatePhoneNumbers()"/>
                              <div class="invalid-feedback">
                    * Surety2 Phone Number is required.
                  </div>
                          </div>
                        </div>

                      

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Applicant Phoneno :</label>
                          <div class="col-sm-10">
                            <input type="text" name="aph" class="form-control" id="basic-default-name"  required  pattern="['0-9]{10}" />
                              <div class="invalid-feedback">
                    * Applicant Phone Number is required.
                  </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Loan Purpose :</label>
                          <div class="col-sm-10">
                            <input type="text" name="purpose" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Loan Purpose is required.
                </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Applicant Father Name :</label>
                          <div class="col-sm-10">
                            <input type="text" name="af" class="form-control" id="basic-default-name"  required pattern="[a-zA-Z][a-zA-Z ]{2,}"/>
                                <div class="invalid-feedback">
                  * Applicant Father Name is required.
                </div>
                          </div>
                        </div>


                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Permanent Address:</label>
                          <div class="col-sm-10">
                            <input type="text" name="pad" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Permanent Address is required.
                </div>
                          </div>
                        </div>


                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Mortage Information:</label>
                          <div class="col-sm-10">
                            <input type="text" name="mifo" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Mortage Information is required.
                </div>
                          </div>
                        </div>

                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Mortage File:</label>
                          <div class="col-sm-10">
                            <input type="file" name="mfile" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Mortage File is required.
                </div>
                          </div>
                        </div>


                         <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Accomodation Period :</label>
                          <div class="col-sm-10">
                            <input type="number" name="period" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Accomodation Period is required.
                </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Loan Amount  :</label>
                          <div class="col-sm-10">
                            <input type="number" name="amt" class="form-control" id="amt"  required />
                            <div class="invalid-feedback">
                  * Loan Amount is required.
                </div>
                          </div>
                          <?php
                          $lid=$_GET['loanid'];
                          $stmt=$admin->ret("SELECT * FROM `aloan` WHERE `lid`='$lid'");
                          $row=$stmt->fetch(PDO::FETCH_ASSOC);
                          ?>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Percentage :</label>
                          <div class="col-sm-10">
                            <input type="hidden"name="lid" value="<?php echo $lid;?>">
                            <input type="number" name="percentage" value="<?php echo $row['ldesc'];?>" class="form-control" id="per1" readonly required />
                            <div class="invalid-feedback">
                  * Percentage is required.
                </div>
                          </div>
                        </div>

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Month :</label>
                          <div class="col-sm-10">
                            <input type="number" name="month" class="form-control" id="month"  onchange="tot()"  required />
                            <div class="invalid-feedback">
                  * Month is required.
                </div>
                          </div>
                        </div>
                        
                         
                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Total :</label>
                          <div class="col-sm-10">
                            <input type="text" name="total" class="form-control" id="total"  readonly required />
                            <div class="invalid-feedback">
                  * Total is required.
                </div>
                          </div>
                        </div>


                        <!-- <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Total amount</label>
                          <div class="col-sm-2">
                            <input type="text" name="amt1" class="form-control" id="tamt"  />
                          </div>
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Percentage</label>
                          <div class="col-sm-2">
                            <input type="text" name="percent" class="form-control" id="per"  onchange="sum()"/>
                          </div>
                          <label class="col-sm-1 col-form-label" for="basic-default-name">Total </label>
                          <div class="col-sm-2">
                            <input type="text" name="total2" class="form-control" id="ttt"  />
                          </div>
                        </div>
                        
                        </div> -->

                        <div class="row mb-3">
                          <label class="col-sm-2 col-form-label" for="basic-default-name">Date</label>
                          <div class="col-sm-10">
                            <input type="date" name="date" class="form-control" id="basic-default-name"  required />
                            <div class="invalid-feedback">
                  * Date is required.
                </div>
                          </div>
                        </div>
                        <div id="alertContainer"></div>
                        <div class="row">
             
              <div class="col-sm-9">
             

                              <?php $stmt1 = $admin->ret("SELECT * FROM `acust`");
                              $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

                              ?>
                           
                                <div style="display:flex;justify-content:center;margin-left:170px;">
                                <button class="btn btn-success w-50" name="loan" >Get Loan</button>
                                </div>

<input type="hidden" name="cid" value="<?php echo $id ?>">
<hr>
                                          
</form>           
                          
                        
                            
                          
                        
            <!-- / Content -->

            <!-- Footer -->
            <script>
    (function() {
      'use strict'

      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByTagName('form')

        // Loop over them and prevent submission
        Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault()
              event.stopPropagation()
            }
            form.classList.add('was-validated')
          }, false)
        })
      }, false)
    }())
  </script>
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




    <script>
  function validateAddress() {
    var address1 = document.getElementById("address1").value;
    var address2 = document.getElementById("address2").value;

    if (address1 === address2) {
      showAlert("Address cannot be the same.", "alert-danger");
      document.getElementById("address2").focus();
      return;
    }

    // Clear alert container
    clearAlert();
  }

  function showAlert(message, alertClass) {
    var alertContainer = document.getElementById("alertContainer");

    // Create alert element
    var alertDiv = document.createElement("div");
    alertDiv.className = "alert " + alertClass + " fade show";
    alertDiv.role = "alert";
    alertDiv.textContent = message;

    // Add alert to container
    alertContainer.appendChild(alertDiv);
  }

  function clearAlert() {
    var alertContainer = document.getElementById("alertContainer");
    alertContainer.innerHTML = "";
  }
</script>
<script>
  function validatePhoneNumbers() {
    var phone1 = document.getElementById("phone1").value;
    var phone2 = document.getElementById("phone2").value;

    if (phone1 === phone2) {
      showAlert("Phone numbers cannot be the same.", "alert-danger");
      document.getElementById("phone2").focus();
      return;
    }

    // Clear alert container
    clearAlert();
  }

  function showAlert(message, alertClass) {
    var alertContainer = document.getElementById("alertContainer");

    // Create alert element
    var alertDiv = document.createElement("div");
    alertDiv.className = "alert " + alertClass + " fade show";
    alertDiv.role = "alert";
    alertDiv.textContent = message;

    // Add alert to container
    alertContainer.appendChild(alertDiv);
  }

  function clearAlert() {
    var alertContainer = document.getElementById("alertContainer");
    alertContainer.innerHTML = "";
  }
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>








 
    
         
   
   
   
    <!-- / Layout wrapper -->
<script> 
  function tot() {
    var a = document.getElementById("amt").value;
    var b = document.getElementById("per1").value;
  
    var c = a * b/100;
    var t = Number(c)+Number(a);
    var d=document.getElementById("month").value;
    var tot=Math.round(t/d);

    document.getElementById("total").value = tot;
    console.log(a,b,c,d);
    
  }
</script>

<script> 
  function sum() {
    var d = document.getElementById("tamt").value;
    var e = document.getElementById("per").value;
    var c = d * e / 100;
    document.getElementById("ttt").value = c;
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