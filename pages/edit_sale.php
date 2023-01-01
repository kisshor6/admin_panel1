
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
      href="../assets/libs/select2/dist/css/select2.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/jquery-minicolors/jquery.minicolors.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      href="../assets/libs/quill/dist/quill.snow.css"
    />
    <link href="../dist/css/style.min.css" rel="stylesheet" />
        <!-- <style>
      .row>* {
        width: none;

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
              <h4 class="page-title">Form Basic</h4>
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
              <div class="ms-auto text-end">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Library
                    </li>
                  </ol>
                </nav>
              </div>
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

            <div class="card">
              <form  method="POST" action="update-sale.php">
                <div class="card-body">
                  <h4 class="card-title">Personal Info</h4>

                    <?php
                      if (isset($_GET['id'])) {
                        $id = $_GET['id'];
                        $query = "SELECT *FROM sales WHERE sid=$id";
                        $sql = mysqli_query($conn, $query);
                        $count = mysqli_num_rows($sql);
                        if ($count == 1) {
                            $row = mysqli_fetch_assoc($sql);

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

                      }
                  }
            
                ?>
             
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Customer</label>
                        <div class="col-sm-9">
                          <div class="col-sm-9">
                          <select type="text" class="form-control" name="customer">
                            <option value='<?php echo $customer; ?>'><?php echo $customer; ?></option>";
                          <?php
                          $sql = "SELECT name FROM customer";
                          $res = mysqli_query($conn, $sql);
                          $count  = mysqli_num_rows($res);
                          if ($count>0) {
                            while($row = mysqli_fetch_assoc($res)){
                              $customer_name = $row['name'];
                              ?>
                              <option value='<?php echo $customer_name; ?>'><?php echo $customer_name; ?></option>";
                              <?php
                              
                            }
                          }else{
                            echo"<option value='0'>No customer available</option>";
                          }                     
                          ?>
                          </select>
                        </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Head</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" name="up_head" >
                            <option value="<?php echo $head; ?>"><?php echo $head; ?></option>
                            <option value="sale">sale</option>
                            <option value="purchase">purchase</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Invoice No</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $invoice_no; ?>" name="up_invoice_no" placeholder="Invoice No Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Challan No</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $challan_no; ?>" name="up_challan" placeholder="Challan No Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Type</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" name="up_type">
                            <option value="<?php echo $type; ?>"><?php echo $type; ?></option>
                            <option value="GST">GST</option>
                            <option value="Nongst">Nongst</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Mode_Payment</label>
                        <div class="col-sm-9">
                           <select type="text" class="form-control"  name="up_payment_mode">
                            <option value="<?php echo $mode_payment; ?>"><?php echo $mode_payment; ?></option>
                            <option value="cash">cash</option>
                            <option value="cheque">cheque</option>
                            <option value="credit">credit</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tax</label>
                        <div class="col-sm-9">
                           <select type="text" class="form-control" name="up_tax">
                            <option value="<?php echo $tax; ?>"><?php echo $tax; ?></option>
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Duration</label>
                        <div class="col-sm-9">
                           <select type="text" class="form-control" name="up_duration">
                            <option value="<?php echo $duration; ?>"><?php echo $duration; ?></option>
                            <option value="1-year">1-year</option>
                            <option value="3-year">3-year</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Commodity</label>
                        <div class="col-sm-9">
                          <input class="form-control" value="<?php echo $commodity; ?>" name="up_commodity" placeholder="Commodity Here" />
                        </div>
                      </div>
                    </div>
                    
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Model</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" value="<?php echo $model; ?>" name="up_model" placeholder="Model Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Rate</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $rate; ?>" name="up_rate" placeholder="Rate Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Quantity</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $qty; ?>" name="up_qty" placeholder="Quantity Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Amount</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $amount; ?>" name="up_amount" placeholder="Amount Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Tax Rate</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $tax_rate; ?>" name="up_tax_rate" placeholder="Tax Rate Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Total</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" value="<?php echo $total; ?>" name="up_total" placeholder="Tax Rate Here" />
                        </div>
                      </div>
                    </div>
                  </div>                
                </div>
                <div class="card-body">
                  <div class="border-top">
                    <div class="card-body">
                      <input type="hidden" name="current_id" value="<?php echo $id; ?>"/>
                      <input type="submit" name="update" class="btn btn-primary"/>
                       
                    </div>
                  </div>
                </div>
              </form>
            </div>

          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <!-- editor -->

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
    <!-- This Page JS -->
    <script src="../assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="../dist/js/pages/mask/mask.init.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="../assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="../assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="../assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="../assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="../assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="../assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="../assets/libs/quill/dist/quill.min.js"></script>
    <script>
      //***********************************//
      // For select 2
      //***********************************//
      $(".select2").select2();

      /*colorpicker*/
      $(".demo").each(function () {
        //
        // Dear reader, it's actually very easy to initialize MiniColors. For example:
        //
        //  $(selector).minicolors();
        //
        // The way I've done it below is just for the demo, so don't get confused
        // by it. Also, data- attributes aren't supported at this time...they're
        // only used for this demo.
        //
        $(this).minicolors({
          control: $(this).attr("data-control") || "hue",
          position: $(this).attr("data-position") || "bottom left",

          change: function (value, opacity) {
            if (!value) return;
            if (opacity) value += ", " + opacity;
            if (typeof console === "object") {
              console.log(value);
            }
          },
          theme: "bootstrap",
        });
      });
      /*datwpicker*/
      jQuery(".mydatepicker").datepicker();
      jQuery("#datepicker-autoclose").datepicker({
        autoclose: true,
        todayHighlight: true,
      });
      var quill = new Quill("#editor", {
        theme: "snow",
      });
    </script>
  </body>
</html>
