<?php include("../partials/_header.php") ?>
    <!-- Favicon icon -->
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="../assets/images/favicon.png"
    />
    <!-- Custom CSS -->
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/extra-libs/multicheck/multicheck.css"
    />
    <link
      href="../assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css"
      rel="stylesheet"
    />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
    <!-- <style>
      .row>* {
        max-width: initial;
        width: auto;

  }
    </style> -->
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
      <div class="lds-ripple">
        <div class="lds-pos"></div>
        <div class="lds-pos"></div>
      </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div
      id="main-wrapper"
      data-layout="vertical"
      data-navbarbg="skin5"
      data-sidebartype="full"
      data-sidebar-position="absolute"
      data-header-position="absolute"
      data-boxed-layout="full"
    >
      <!-- ============================================================== -->
      <!-- Topbar header - style you can find in pages.scss -->
      <!-- ============================================================== -->
       <?php include("../partials/_headertop.php") ?>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <?php include("../partials/_aside.php") ?>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="page-breadcrumb">
          <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
              <h4 class="page-title">Tables</h4>
              <?php
             
             if (isset($_SESSION['alert'])) {       
                ?> <h4 class="text-danger">  <?php echo $_SESSION['alert'];?> </h4> <?php            
                unset($_SESSION['alert']);
              }  
             
             if (isset($_SESSION['alert_success'])) {
                ?> <h4 class="text-success">  <?php echo $_SESSION['alert_success'];  ?> </h4> <?php      
                unset($_SESSION['alert_success']);
              }  
             ?>
            </div>
          </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Basic Datatable</h5>
                <div class="table-responsive">
                  <?php
                  $query = "SELECT *FROM sales";
                  $sql = mysqli_query($conn, $query);
                  $i = 1;
                ?>
                  <table class="table">
                    <thead>
                      <tr>
                        <th class="align-center"><h4>Sno</h4></th>
                        <th class="align-center"><h4>Customer</h4></th>
                        <th class="align-center"><h4>Head</h4></th>
                        <th class="align-center"><h4>Duration</h4></th>
                        <th class="align-center"><h4>model</h4></th>
                        <th class="align-center"><h4>Rate</h4></th>
                        <th class="align-center"><h4>Qty</h4></th>
                        <th class="align-center"><h4>Amount</h4></th>
                        <th class="align-center"><h4>Tax</h4></th>
                        <th class="align-center"><h4>Total</h4></th>
                        <th class="align-center"><h4>Time</h4></th>
                        <th class="align-center"><h4>Feature</h4></th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                      if ($sql == true) {
                          $count = mysqli_num_rows($sql);
                          if($count>0) {
                              while ($row = mysqli_fetch_assoc($sql)) {
                                  $id = $row['sid'];
                                  $customer = $row['customer'];
                                  $head = $row['head'];
                                  $invoice_no = $row['invoice_no'];
                                  $challan_no = $row['challan_no'];
                                  $type = $row['type'];
                                  $mode_payment = $row['mode_payment'];
                                  $tax = $row['tax'];
                                  $duration = $row['duration'];
                                  $commodity = $row['commodity'];
                                  $model = $row['model'];
                                  $rate = $row['rate'];
                                  $qty = $row['qty'];
                                  $amount = $row['amount'];
                                  $tax_rate = $row['tax_rate'];
                                  $total = $row['total'];
                                  $time = $row['time'];
                      ?>
                      <tr>
                        <td class="align-center"><?php echo $i++; ?></td>
                        <td class="align-center"><?php echo $customer; ?></td>
                        <td class="align-center"><?php echo $head; ?></td>
                        <td class="align-center"><?php echo $duration; ?></td>
                        <td class="align-center"><?php echo $model; ?></td>
                        <td class="align-center"><?php echo $rate; ?></td>
                        <td class="align-center"><?php echo $qty; ?></td>
                        <td class="align-center"><?php echo $amount; ?></td>
                        <td class="align-center"><?php echo $tax_rate; ?> %</td>
                        <td class="align-center"><?php echo $total; ?></td>
                        <td class="align-center"><?php echo $time; ?></td>

                        <td class="align-center">
                      
                          <a href="edit_sale.php?id=<?php echo $id; ?>" class="btn btn-warning ">Edit</a>
                          <a href="delete_sale.php?id=<?php echo $id; ?> " onclick='return checkDelete()' class="btn btn-danger"> Delete</a>
                        </td>
                      </tr>
                        <?php
                              }
                          }else{
                              echo"NO DATA INSERTED";
                          }
                      }
                      ?> 
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->
          <!-- ============================================================== -->
          <!-- ============================================================== -->
          <!-- Right sidebar -->
          <!-- ============================================================== -->
          <!-- .right-sidebar -->
          <!-- ============================================================== -->
          <!-- End Right sidebar -->
          <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center">
          All Rights Reserved by Matrix-admin. Designed and Developed by
          <a href="https://www.wrappixel.com">WrapPixel</a>.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
     <script>
        function checkDelete() {
        return confirm('Are you sure you want to delete this record');
        }
    </script>
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!-- this page js -->
    <script src="../assets/extra-libs/multicheck/datatable-checkbox-init.js"></script>
    <script src="../assets/extra-libs/multicheck/jquery.multicheck.js"></script>
    <script src="../assets/extra-libs/DataTables/datatables.min.js"></script>
    <script>
      /****************************************
       *       Basic Table                   *
       ****************************************/
      $("#zero_config").DataTable();
    </script>
  </body>
</html>
