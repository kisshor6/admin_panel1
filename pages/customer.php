
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
              <form class="form-horizontal" method="POST" action="add-customer.php" enctype="multipart/form-data">
                <div class="card-body">
                  <h4 class="card-title">Personal Info</h4>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">First Name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" type="text" name="fname" placeholder="First Name Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Mobile</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" type="tel" name="mobile" maxlength="10" placeholder="Mobile number Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">category</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" name="category" >
                            <option value="">Selet your category</option>
                            <option value="GPS">GPS</option>
                            <option value="CarD">CarD</option>
                            <option value="CCTV">CCTV</option>
                            <option value="Customers">Customers</option>
                            <option value="Others">Others</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Shop name</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="shopname" placeholder="shop Name Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Address</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="address" placeholder="Address Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">State</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" name="state" placeholder="Address Here">
                            <option value="">Select the state</option>
                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                            <option value="Assam">Assam</option>
                            <option value="Bihar">Bihar</option>
                            <option value="Chandigarh">Chandigarh</option>
                            <option value="Chhattisgarh">Chhattisgarh</option>
                            <option value="Goa">Goa</option>
                            <option value="Gujarat">Gujarat</option>
                            <option value="Haryana">Haryana</option>
                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                            <option value="Jharkhand">Jharkhand</option>
                            <option value="Karnataka">Karnataka</option>
                            <option value="Kerala">Kerala</option>
                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                            <option value="Maharashtra">Maharashtra</option>
                            <option value="Manipur">Manipur</option>
                            <option value="Meghalaya">Meghalaya</option>
                            <option value="Mizoram">Mizoram</option>
                            <option value="Nagaland">Nagaland</option>
                            <option value="Odisha">Odisha</option>
                            <option value="Punjab">Punjab</option>
                            <option value="Rajasthan">Rajasthan</option>
                            <option value="Sikkim">Sikkim</option>
                            <option value="Tamil Nadu">Tamil Nadu</option>
                            <option value="Telangana">Telangana</option>
                            <option value="Tripura">Tripura</option>
                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                            <option value="Uttarakhand">Uttarakhand</option>
                            <option value="West Bengal">West Bengal</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">City</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="city" placeholder="city name Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Pincode</label>
                        <div class="col-sm-9">
                          <input class="form-control" inputmode="numeric" pattern="[0-9]{6}" type="text" name="pincode" placeholder="Pincode Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Email</label>
                        <div class="col-sm-9">
                          <input type="email" class="form-control" name="email" placeholder="email Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">phone</label>
                        <div class="col-sm-9">
                          <input class="form-control" type="tel" maxlength="12" name="phone" placeholder="phone number Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Web</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="web" placeholder="city name Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">GST</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="gst" placeholder="GST no Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Feature</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="feature" placeholder="Feature  Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Fields</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" name="fields" >
                            <option value="">Select your fields</option>
                            <option value="Accessories">Accessories</option>
                            <option value="CCTV">CCTV</option>
                            <option value="GPS">GPS</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Status</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" name="status" >
                            <option value="">Select your status</option>
                            <option value="Stockist">Stockist</option>
                            <option value="Distributor">Distributor</option>
                            <option value="Dealer">Dealer</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Picture GST</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" name="pic_gst"  />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Picture PAN</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" name="pic_pan"  />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Picture shop</label>
                        <div class="col-sm-9">
                          <input type="file" class="form-control" name="pic_shop"  />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Discovered By</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="discoveredby" placeholder="discovered Name Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Distributor</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="distributor" placeholder="distributor Name Here" />
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Summary of visit</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" name="summaryofvisit" >
                            <option value="">select Summary</option>
                            <option value="Wiling to Buy">Wiling to Buy</option>
                            <option value="Not Interested">Not Interested</option>
                            <option value="Buying From other">Buying From other</option>
                            <option value="Other">Other</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Follow up</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" name="followup" >
                            <option value="Yes">Yes</option>
                            <option value="No">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Remarks</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" name="remarks" >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Longitude</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="longitude" >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Latitude</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" name="latitude" >
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group row">
                        <label for="fname" class="col-sm-3 text-end control-label col-form-label">Is Dirty</label>
                        <div class="col-sm-9">
                          <select type="text" class="form-control" name="isdirty" >
                            <option value="0">Yes</option>
                            <option value="1">No</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>                
                </div>
                <div class="card-body">
                  <div class="border-top">
                    <div class="card-body">
                      <input type="submit" name="submit" class="btn btn-primary"/>
                       
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
