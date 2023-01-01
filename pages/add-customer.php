<?php
    include('../config/_dbconnect.php'); ?>
<?php 
    if (isset($_POST['submit'])) {
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $shopname = mysqli_real_escape_string($conn, $_POST['shopname']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $state = mysqli_real_escape_string($conn, $_POST['state']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $web = mysqli_real_escape_string($conn, $_POST['web']);
    $gst = mysqli_real_escape_string($conn, $_POST['gst']);
    $features = mysqli_real_escape_string($conn, $_POST['feature']);
    $fields = mysqli_real_escape_string($conn, $_POST['fields']);
    $status = mysqli_real_escape_string($conn, $_POST['status']);
    $discoveredby = mysqli_real_escape_string($conn, $_POST['discoveredby']);
    $distributor = mysqli_real_escape_string($conn, $_POST['distributor']);
    $summaryofvisit = mysqli_real_escape_string($conn, $_POST['summaryofvisit']);
    $followup = mysqli_real_escape_string($conn, $_POST['followup']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);
    $isdirty = mysqli_real_escape_string($conn, $_POST['isdirty']);



    // Images Uploading part

    $vaild_format = array('png', 'jpg', 'jpeg');

    // GST Picture

    if ($_FILES['pic_gst']['name']) {
        $gst_name = $_FILES['pic_gst']['name'];
        $gst_size = $_FILES['pic_gst']['size'];
        $gst_temp = $_FILES['pic_gst']['tmp_name'];

        $gst_split = explode(".", $gst_name);
        $gst_ext_check = strtolower(end($gst_split));
        $gst_new_name = time().".".$gst_ext_check;

        if (in_array($gst_ext_check, $vaild_format)) {
        if ($gst_size / 1000 > 250) {
            $_SESSION['alert'] = "File size is greater than 2 MB";
            header('location:customer.php');
            die();
        
        }else{
            $gst_path = "../uploaded/gst/";
            move_uploaded_file($gst_temp, $gst_path.$gst_new_name);
        }
        }else{
            $_SESSION['alert'] = "Only png, jpg, jpej files are allowed !";
            header('location:customer.php');
            die();
        }                      
    }

    //GST Picture
    //PAN Picture

    if ($_FILES['pic_pan']['name']) {
        $pan_name = $_FILES['pic_pan']['name'];
        $pan_size = $_FILES['pic_pan']['size'];
        $pan_temp = $_FILES['pic_pan']['tmp_name'];

        $pan_split = explode(".", $pan_name);
        $pan_ext_check = strtolower(end($pan_split));
        $pan_new_name = time().".".$pan_ext_check;

        if (in_array($pan_ext_check, $vaild_format)) {
            if ($pan_size / 1000 > 250) {
                $_SESSION['alert'] = "File size is greater than 2 MB";
                header('location:customer.php');
                die();
            
            }else{
                $pan_path = "../uploaded/pan/";
                move_uploaded_file($pan_temp, $pan_path.$pan_new_name);
            }
        }else{
            $_SESSION['alert'] = "Only png, jpg, jpej files are allowed !";
            header('location:customer.php');
            die();
        }                      
    }

    // PAN Picture
    // SHOP Picture

    if ($_FILES['pic_shop']['name']) {
        $shop_name = $_FILES['pic_shop']['name'];
        $shop_size = $_FILES['pic_shop']['size'];
        $shop_temp = $_FILES['pic_shop']['tmp_name'];

        $shop_split = explode(".", $shop_name);
        $shop_ext_check = strtolower(end($shop_split));
        $shop_new_name = time().".".$shop_ext_check;

        if (in_array($shop_ext_check, $vaild_format)) {
        if ($shop_size / 1000 > 250) {
            $_SESSION['alert'] = "File size is greater than 2 MB";
            header('location:customer.php');
            die();
            
        
        }else{
            $shop_path = "../uploaded/shop/";
            move_uploaded_file($shop_temp, $shop_path.$shop_new_name);
        }
        }else{
            $_SESSION['alert'] = "Only png, jpg, jpej files are allowed !";
            header('location:customer.php');
            die();
        }                      
    }

    // SHOP Picture
    // Image uploading part

    if (empty($fname) || empty($mobile)) {
        $_SESSION['alert'] = "name and mobile must required !";
        header('location:customer.php');
        die();
    }else{
        // $gst_new_name = $pan_new_name = $shop_new_name = '';
        $sql3 = "INSERT INTO customer SET name='$fname', mobile='$mobile', category='$category', shopname='$shopname', address='$address', state='$state', city='$city', pincode='$pincode', email='$email', phone='$phone', web='$web', gst='$gst', features='$features', fields='$fields', status='$status', pic_gst='$gst_new_name', pic_pan='$pan_new_name', pic_shop='$shop_new_name', discovered_by='$discoveredby', distributor='$distributor', summary_of_visit='$summaryofvisit', followup='$followup', remarks='$remarks', longitude='$longitude', latitude='$latitude', isdirty='$isdirty'";
        $query = mysqli_query($conn, $sql3);
        if ($query == true) {
            $_SESSION['alert_success'] = "your data Successfully added";
            header('location:customer-list.php');
            die();

        }else{
            $_SESSION['alert'] = "Failed to insert your data";
            header('location:customer-list.php');
            ob_end_flush();
            die();
        }
        }                                       
    }
?>