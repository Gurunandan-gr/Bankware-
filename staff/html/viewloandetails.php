<?php
require_once '../../config.php';
$control = new Controller();
$admin = new Admin();
$id = $_GET['id'];
$stmt = $admin->ret("SELECT * FROM `ld` where `gid`='$id'");
$rr = $stmt->fetch(PDO::FETCH_ASSOC);

if (!isset($_SESSION['aid'])) {
  $admin->redirect('slogin');
}
$id = $_SESSION['aid'];
$stmt = $admin->ret("SELECT * FROM `astaff` WHERE `sid`='$id'");
$row = $stmt->fetch(PDO::FETCH_ASSOC);
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
<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.css"
  rel="stylesheet"
/>
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
    .fas {
  font-size: 2.5rem;
}

.card-body {
  padding: .5rem 1rem;
}
    body{
    background: #eaeaea;
    margin-top:20px;
}
.profile-info-list {
    padding: 0;
    margin: 0;
    list-style-type: none;
}
.friend-list,
.img-grid-list {
    margin: -1px;
    list-style-type: none;
}
.profile-info-list > li.title {
    font-size: 0.625rem;
    font-weight: 700;
    color: #8a8a8f;
    padding: 0 0 0.3125rem;
}
.profile-info-list > li + li.title {
    padding-top: 1.5625rem;
}
.profile-info-list > li {
    padding: 0.625rem 0;
}
.profile-info-list > li .field {
    font-weight: 700;
}
.profile-info-list > li .value {
    color: #666;
}
.profile-info-list > li.img-list a {
    display: inline-block;
}
.profile-info-list > li.img-list a img {
    max-width: 2.25rem;
    -webkit-border-radius: 2.5rem;
    -moz-border-radius: 2.5rem;
    border-radius: 2.5rem;
}
.coming-soon-cover img,
.email-detail-attachment .email-attachment .document-file img,
.email-sender-img img,
.friend-list .friend-img img,
.profile-header-img img {
    max-width: 100%;
}
.table.table-profile th {
    border: none;
    color: #000;
    padding-bottom: 0.3125rem;
    padding-top: 0;
}
.table.table-profile td {
    border-color: #c8c7cc;
}
.table.table-profile tbody + thead > tr > th {
    padding-top: 1.5625rem;
}
.table.table-profile .field {
    color: #666;
    font-weight: 600;
    width: 25%;
    text-align: right;
}
.table.table-profile .value {
    font-weight: 500;
}
.profile-header {
    position: relative;
    overflow: hidden;
}
.profile-header .profile-header-cover {
   
    background-size: 100% auto;
    position: absolute;
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
}
.profile-header .profile-header-cover:before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.25) 0, rgba(0, 0, 0, 0.85) 100%);
}
.profile-header .profile-header-content,
.profile-header .profile-header-tab,
.profile-header-img,
body .fc-icon {
    position: relative;
}
.profile-header .profile-header-tab {
    background: #fff;
    list-style-type: none;
    margin: -1.25rem 0 0;
    padding: 0 0 0 8.75rem;
    border-bottom: 1px solid #c8c7cc;
    white-space: nowrap;
}
.profile-header .profile-header-tab > li {
    display: inline-block;
    margin: 0;
}
.profile-header .profile-header-tab > li > a {
    display: block;
    color: #000;
    line-height: 1.25rem;
    padding: 0.625rem 1.25rem;
    text-decoration: none;
    font-weight: 700;
    font-size: 0.75rem;
    border: none;
}
.profile-header .profile-header-tab > li.active > a,
.profile-header .profile-header-tab > li > a.active {
    color: #007aff;
}
.profile-header .profile-header-content:after,
.profile-header .profile-header-content:before {
    content: "";
    display: table;
    clear: both;
}
.profile-header .profile-header-content {
    color: #fff;
    padding: 1.25rem;
}
body .fc th a,
body .fc-ltr .fc-basic-view .fc-day-top .fc-day-number,
body .fc-widget-header a {
    color: #000;
}
.profile-header-img {
    float: left;
    width: 7.5rem;
    height: 7.5rem;
    overflow: hidden;
    z-index: 10;
    margin: 0 1.25rem -1.25rem 0;
    padding: 0.1875rem;
    -webkit-border-radius: 0.25rem;
    -moz-border-radius: 0.25rem;
    border-radius: 0.25rem;
    background: #fff;
}
.profile-header-info h4 {
    font-weight: 500;
    margin-bottom: 0.3125rem;
}
.profile-container {
    padding: 1.5625rem;
}
@media (max-width: 967px) {
    .profile-header-img {
        width: 5.625rem;
        height: 5.625rem;
        margin: 0;
    }
    .profile-header-info {
        margin-left: 6.5625rem;
        padding-bottom: 0.9375rem;
    }
    .profile-header .profile-header-tab {
        padding-left: 0;
    }
}
@media (max-width: 767px) {
    .profile-header .profile-header-cover {
        background-position: top;
    }
    .profile-header-img {
        width: 3.75rem;
        height: 3.75rem;
        margin: 0;
    }
    .profile-header-info {
        margin-left: 4.6875rem;
        padding-bottom: 0.9375rem;
    }
    .profile-header-info h4 {
        margin: 0 0 0.3125rem;
    }
    .profile-header .profile-header-tab {
        white-space: nowrap;
        overflow: scroll;
        padding: 0;
    }
    .profile-container {
        padding: 0.9375rem 0.9375rem 3.6875rem;
    }
    .friend-list > li {
        float: none;
        width: auto;
    }
}
.profile-info-list {
    padding: 0;
    margin: 0;
    list-style-type: none;
}
.friend-list,
.img-grid-list {
    margin: -1px;
    list-style-type: none;
}
.profile-info-list > li.title {
    font-size: 0.625rem;
    font-weight: 700;
    color: #8a8a8f;
    padding: 0 0 0.3125rem;
}
.profile-info-list > li + li.title {
    padding-top: 1.5625rem;
}
.profile-info-list > li {
    padding: 0.625rem 0;
}
.profile-info-list > li .field {
    font-weight: 700;
}
.profile-info-list > li .value {
    color: #666;
}
.profile-info-list > li.img-list a {
    display: inline-block;
}
.profile-info-list > li.img-list a img {
    max-width: 2.25rem;
    -webkit-border-radius: 2.5rem;
    -moz-border-radius: 2.5rem;
    border-radius: 2.5rem;
}
.coming-soon-cover img,
.email-detail-attachment .email-attachment .document-file img,
.email-sender-img img,
.friend-list .friend-img img,
.profile-header-img img {
    max-width: 100%;
}
.table.table-profile th {
    border: none;
    color: #000;
    padding-bottom: 0.3125rem;
    padding-top: 0;
}
.table.table-profile td {
    border-color: #c8c7cc;
}
.table.table-profile tbody + thead > tr > th {
    padding-top: 1.5625rem;
}
.table.table-profile .field {
    color: #666;
    font-weight: 600;
    width: 25%;
    text-align: right;
}
.table.table-profile .value {
    font-weight: 500;
}

.friend-list,
.img-grid-list {
    margin: -1px;
    list-style-type: none;
}
.img-grid-list {
    padding: 0;
}
.img-grid-list > li {
    float: left;
    width: 20%;
    padding: 1px;
}
.img-grid-list > li a {
    position: relative;
    overflow: hidden;
    padding-top: 75%;
    display: block;
}
.img-grid-list > li a img {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    left: 0;
    max-width: 100%;
}
  </style>
<style>
    .profile-info-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    .profile-info-list li {
        flex-basis: calc(33.33% - 20px);
        padding: 10px;
    }
    .profile-info-list li.title {
        flex-basis: 100%;
    }
    .img-list {
        display: flex;
        flex-wrap: wrap;
        justify-content: flex-start;
    }
    .img-list a {
        flex-basis: 33.33%;
        padding: 10px;
    }
</style>
<style>
    /* Modal styles */
    .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        overflow: auto;
    }
    
    .modal-content {
        display: block;
        margin: 10% auto;
        max-width: 700px;
        max-height: 80vh;
    }
    
    .modal-img {
        display: block;
        width: 100%;
        height: auto;
        border-radius: 0;
    }
</style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->
      <?php include 'sidebar.php'
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
         
              <!-- Basic Bootstrap Table -->
              
              <!-- Bootstrap Dark Table -->
              
              <!-- Bootstrap Table with Header - Light -->


              <!-- Bootstrap Table with Header - Footer -->
              
              <!-- Bootstrap Table with Header - Footer -->

             

              <!-- Bootstrap Table with Caption -->
              
              <!-- Bootstrap Table with Caption -->

         

              <!-- Striped Rows -->
              
              <!-- Bordered Table -->
              <!--/ Bordered Table -->
              <div id="content" class="container p-0">
    <div class="profile-header">
        <div class="profile-header-cover"></div>
        <div class="profile-header-content">
            <div class="profile-header-img">
                <img src="../../controller/<?php echo $rr['cphoto']; ?>" alt="" style="height:110px;width:140px;object-fit:cover;overflow:hidden" />
            </div>
            <div class="profile-header-info">
                <h1 class="m-t-sm" style="color: white;"><?php echo $rr['cname']; ?></h1>
                <!-- <p class="m-b-sm">UXUI + Frontend Developer</p>
                <a href="#" class="btn btn-xs btn-primary mb-4">Edit Profile</a> -->
            </div>
        </div>

        <!-- <ul class="profile-header-tab nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link" id="posts-tab" data-toggle="tab" href="#posts">POSTS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="about-tab" data-toggle="tab" href="#about">ABOUT</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="photos-tab" data-toggle="tab" href="#photos">PHOTOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="videos-tab" data-toggle="tab" href="#videos">VIDEOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active show" id="friends-tab" data-toggle="tab" href="#friends">FRIENDS</a>
            </li>
        </ul> -->

    </div>

    <div class="profile-container">
        <div class="row row-space-20">
            <div class="col-md-8">
                <div class="tab-content p-0">
                    <div class="tab-pane fade" id="posts">
                        <!-- Content for the "POSTS" tab -->
                    </div>
                    <div class="tab-pane fade" id="about">
                        <!-- Content for the "ABOUT" tab -->
                    </div>
                    <div class="tab-pane fade" id="photos">
                        <div class="m-b-10"><b>Photos (30)</b></div>
                        <ul class="img-grid-list">
                            <li>
                                <a href="#"><img src="https://www.bootdey.com/image/150x150/008B8B/000000" alt="" class="img-portrait" /></a>
                            </li>
                            <!-- Add more photo items here -->
                        </ul>
                    </div>
                    <div class="tab-pane fade" id="videos">
                        <!-- Content for the "VIDEOS" tab -->
                    </div>
                    <div class="tab-pane fade show active" id="friends">
                   

<div class="tab-pane fade show active" id="friends">
    <ul class="profile-info-list">
        <li class="title" >Moratage Information</li>
        <li>
            <div class="field">Applicant Name:</div>
            <div class="value"><?php echo $rr['cname']; ?></div>
        </li>
        <li>
            <div class="field">Applicant Occupation:</div>
            <div class="value"><?php echo $rr['occup']; ?></div>
        </li>
        <li>
            <div class="field">Income source:</div>
            <div class="value"><?php echo $rr['income']; ?></div>
        </li>
        <li>
            <div class="field">Age:</div>
            <div class="value"><?php echo $rr['age']; ?></div>
        </li>
        <li>
            <div class="field">Applicant Qualification:</div>
            <div class="value">
            <?php echo $rr['quli']; ?>
            </div>
        </li>
        <li>
            <div class="field">Issue No:</div>
            <div class="value"><?php echo $rr['isno']; ?></div>
        </li>
        <li>
            <div class="field">Issue Date:</div>
            <div class="value"><?php echo $rr['isdate']; ?></div>
        </li>
        <li>
            <div class="field">Surity1 Address:</div>
            <div class="value"><?php echo $rr['s1ad']; ?></div>
        </li>
        <li>
            <div class="field">Surity1 Phone:</div>
            <div class="value"><?php echo $rr['s1phone']; ?></div>
        </li>
        <li>
            <div class="field">Surity2 Address:</div>
            <div class="value"><?php echo $rr['s2ad']; ?></div>
        </li>
        <li>
            <div class="field">Surity2 Phone:</div>
            <div class="value"><?php echo $rr['s2phone']; ?></div>
        </li>
        <li>
            <div class="field">Applicant Phone:</div>
            <div class="value"><?php echo $rr['aphone']; ?></div>
        </li>
        <li>
            <div class="field">Loan Purpose:</div>
            <div class="value"><?php echo $rr['purpose']; ?></div>
        </li>
        <li>
            <div class="field">Applicant Father:</div>
            <div class="value"><?php echo $rr['afather']; ?></div>
        </li>
        <li>
            <div class="field">Permanent Adress:</div>
            <div class="value"><?php echo $rr['address']; ?></div>
        </li>
        <li>
            <div class="field">Mortage Information:</div>
            <div class="value"><?php echo $rr['minfo']; ?></div>
        </li>
        <li>
            <div class="field">Accomadation Period:</div>
            <div class="value"><?php echo $rr['aperoid']; ?></div>
        </li>
        <li>
            <div class="field">Loan Amount:</div>
            <div class="value"><?php echo $rr['amt']; ?></div>
        </li>
        <li>
            <div class="field">Percentage:</div>
            <div class="value"><?php echo $rr['percent']; ?></div>
        </li>
        <li>
            <div class="field">Month:</div>
            <div class="value"><?php echo $rr['month']; ?></div>
        </li>
        <li>
            <div class="field">Total:</div>
            <div class="value"><?php echo $rr['total']; ?></div>
        </li>
        <li>
            <div class="field">Date:</div>
            <div class="value"><?php echo $rr['date']; ?></div>
        </li>
       
       
       
    <li class="">
            <!-- <div class="zoom-img" style="margin-right: 200px;">
                <a href="#" onclick="openModal()">
                    <img src="../../controller/<?php echo $rr['cphoto']; ?>" alt="" style="width: 400px;height:200px;border-radius:0px;" />
                </a>
            </div> -->
     
            <!-- <div class='embed-responsive' style='padding-bottom:250%'>
    <object data='../../controller/<?php echo $rr['mfile']; ?>' type='application/pdf' width='100%' height='100%'></object>
</div> -->


            <!-- Add more friend images here -->
        </li>
  
           
                

             
           
    </ul>
    
</div>

</div>

                </div>
            </div>
            <div id="carlos" class="container">
 
 <div class="col-12">
  
   <h4 class="pt-5">Mortage Information</h4>
 </div>
 <div v-for="i in 10" class="col-12 col-sm-6 col-md-4">
   <div class="card">
     <a href="../../controller/<?php echo $rr['mfile']; ?>" @click="alert(message)">
       <div class="card-body d-flex align-items-center">
       <div class="icon">
         <i class="fas fa-file-pdf"></i>
       </div>
       <div class="pl-3 data">
         <p class="m-0">Mortage File</p>
       </div>
     </div>
     </a>
   </div>
 </div>


</div>
            
        </div>
    </div>
</div>

              <!-- Borderless Table -->
             
              <!-- <div id="myModal" class="modal">
    <span class="modal-content">
        <img class="modal-img" src="../../controller/<?php echo $rr['cphoto']; ?>" alt="" />
    </span>
</div>         -->
 <!-- Hoverable Table rows -->
              
              <!-- Small table -->
        
              
              <!-- Contextual Classes -->

              

              <!-- Table within card -->
             
              <!--/ Responsive Table -->
            
            <!-- / Content -->

            <!-- Footer -->
            
            <!-- / Footer -->

            
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    
    <script>
    // Open the modal
    function openModal() {
        document.getElementById("myModal").style.display = "block";
    }
    
    // Close the modal
    function closeModal() {
        document.getElementById("myModal").style.display = "none";
    }
    
    // Close the modal when clicking outside of it
    window.onclick = function (event) {
        if (event.target == document.getElementById("myModal")) {
            closeModal();
        }
    };
</script>
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"
></script>
    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>