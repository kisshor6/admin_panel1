<?php
    ob_start();
    include('../config/_dbconnect.php'); ?>
<?php 
    if (isset($_POST['update'])) {  

        $current_id = mysqli_real_escape_string($conn, $_POST['current_id']);

        $up_fname = mysqli_real_escape_string($conn, $_POST['up_fname']);
        $up_mobile = mysqli_real_escape_string($conn, $_POST['up_mobile']);
        $up_category = mysqli_real_escape_string($conn, $_POST['up_category']);
        $up_shopname = mysqli_real_escape_string($conn, $_POST['up_shopname']);
        $up_address = mysqli_real_escape_string($conn, $_POST['up_address']);
        $up_state = mysqli_real_escape_string($conn, $_POST['up_state']);
        $up_city = mysqli_real_escape_string($conn, $_POST['up_city']);

        $up_pincode = mysqli_real_escape_string($conn, $_POST['up_pincode']);
        $up_email = mysqli_real_escape_string($conn, $_POST['up_email']);
        $up_phone = mysqli_real_escape_string($conn, $_POST['up_phone']);
        $up_web = mysqli_real_escape_string($conn, $_POST['up_web']);
        $up_gst = mysqli_real_escape_string($conn, $_POST['up_gst']);
        $up_features = mysqli_real_escape_string($conn, $_POST['up_feature']);
        $up_fields = mysqli_real_escape_string($conn, $_POST['up_fields']);
        $up_status = mysqli_real_escape_string($conn, $_POST['up_status']);

        $current_gst_img = mysqli_real_escape_string($conn, $_POST['current_gst_img']);
        $current_pan_img = mysqli_real_escape_string($conn, $_POST['current_pan_img']);
        $current_shop_img = mysqli_real_escape_string($conn, $_POST['current_shop_img']);

        $up_discoveredby = mysqli_real_escape_string($conn, $_POST['up_discoveredby']);
        $up_distributor = mysqli_real_escape_string($conn, $_POST['up_distributor']);
        $up_summaryofvisit = mysqli_real_escape_string($conn, $_POST['up_summaryofvisit']);
        $up_followup = mysqli_real_escape_string($conn, $_POST['up_followup']);
        $up_remarks = mysqli_real_escape_string($conn, $_POST['up_remarks']);
        $up_longitude = mysqli_real_escape_string($conn, $_POST['up_longitude']);
        $up_latitude = mysqli_real_escape_string($conn, $_POST['up_latitude']);
        $up_isdirty = mysqli_real_escape_string($conn, $_POST['up_isdirty']);  
        
        
        // Images Updating part

        $vaild_format = array('png', 'jpg', 'jpeg');

        // GST Picture        

        if (isset($_FILES['up_pic_gst']['name'])) {
            $up_gst_name = $_FILES['up_pic_gst']['name'];

            if ($up_gst_name != "") {
                $up_gst_size = $_FILES['up_pic_gst']['size'];
                $up_gst_temp = $_FILES['up_pic_gst']['tmp_name'];

                $up_gst_split = explode(".", $up_gst_name);
                $up_gst_ext_check = strtolower(end($up_gst_split));
                $up_gst_name = time().".".$up_gst_ext_check;

                if (in_array($up_gst_ext_check, $vaild_format)) {
                    if (($up_gst_size / 1000) > 250) {
                        $_SESSION['alert'] = "GST file size is greater than 2 MB";
                        header('location: customer-list.php');
                        die();
                    
                    }else{

                        $up_gst_path = "../uploaded/gst/";
                        move_uploaded_file($up_gst_temp, $up_gst_path.$up_gst_name);

                        if ($current_gst_img != "") {
                            $remove_gst_path = "../uploaded/gst/".$current_gst_img;
                            $remove_gst = unlink($remove_gst_path);

                            if ($remove_gst == false) {
                                $_SESSION['alert'] = "Failed to remove GST image  !";
                                header('location: customer-list.php');
                                die();
                            }
                        }                                               
                    }                     
                }else{
                    $_SESSION['alert'] = "Only png, jpg, jpej files are allowed gst !";
                    header('location: customer-list.php');
                    die();
                }               
            }
                        
        }
        if ($up_gst_name == "") {
            $up_gst_name = $current_gst_img;
        }      

        //GST Picture

        // PAN Picture

        if (isset($_FILES['up_pic_pan']['name'])) {
            $up_pan_name = $_FILES['up_pic_pan']['name'];
            
            if ($up_pan_name != "") {
                $up_pan_size = $_FILES['up_pic_pan']['size'];
                $up_pan_temp = $_FILES['up_pic_pan']['tmp_name'];

                $up_pan_split = explode(".", $up_pan_name);
                $up_pan_ext_check = strtolower(end($up_pan_split));
                $up_pan_name = time().".".$up_pan_ext_check;

                if (in_array($up_pan_ext_check, $vaild_format)) {
                    if (($up_pan_size / 1000) > 250) {
                        $_SESSION['alert'] = "pan file size is greater than 2 MB";
                        header('location: customer-list.php');
                        die();
                    
                    }else{
                        $up_pan_path = "../uploaded/pan/";
                        move_uploaded_file($up_pan_temp, $up_pan_path.$up_pan_name);

                        if ($current_pan_img != "") {
                            $remove_pan_path = "../uploaded/pan/".$current_pan_img;
                            $remove_pan = unlink($remove_pan_path);
                            if ($remove_pan == false) {
                                $_SESSION['alert'] = "Failed to remove PAN image  !";
                                header('location: customer-list.php');
                                die();
                            }
                        } 
                    }                     
                }else{
                    $_SESSION['alert'] = "Only png, jpg, jpej files are allowed pan  !";
                    header('location: customer-list.php');
                    die();
                } 
            }           
        }
        
        if ($up_pan_name == "") {
            $up_pan_name = $current_pan_img;
        }  

        //PAN Picture

        // SHOP Picture




        if (isset($_FILES['up_pic_shop']['name'])) {
            $up_shop_name = $_FILES['up_pic_shop']['name'];
            
            if ($up_shop_name != "") {
                $up_shop_size = $_FILES['up_pic_shop']['size'];
                $up_shop_temp = $_FILES['up_pic_shop']['tmp_name'];

                $up_shop_split = explode(".", $up_shop_name);
                $up_shop_ext_check = strtolower(end($up_shop_split));
                $up_shop_name = time().".".$up_shop_ext_check;

                if (in_array($up_shop_ext_check, $vaild_format)) {
                    if (($up_shop_size / 1000) > 250) {
                        $_SESSION['alert'] = "pan file size is greater than 2 MB";
                        header('location: customer-list.php');
                        die();
                    
                    }else{
                        $up_shop_path = "../uploaded/shop/";
                        move_uploaded_file($up_shop_temp, $up_shop_path.$up_shop_name);

                        if ($current_shop_img != "") {
                            $remove_shop_path = "../uploaded/shop/".$current_shop_img;
                            $remove_shop = unlink($remove_shop_path);
                            if ($remove_shop == false) {
                                $_SESSION['alert'] = "Failed to remove PAN image  !";
                                header('location: customer-list.php');
                                die();
                            }
                        } 
                    }                     
                }else{
                    $_SESSION['alert'] = "Only png, jpg, jpej files are allowed pan  !";
                    header('location: customer-list.php');
                    die();
                } 
            }           
        }
        if ($up_shop_name == "") {
            $up_shop_name = $current_shop_img;
        }
 
        //SHOP Picture

        if (empty($up_fname) || empty($up_mobile)) {
            $_SESSION['alert'] = "name and mobile must required !";
            header('location: customer-list.php');
            die();
        }else{
            // $gst_new_name = $pan_new_name = $shop_new_name = '';
            $sql3 = "UPDATE customer SET name='$up_fname', mobile='$up_mobile', category='$up_category', shopname='$up_shopname', address='$up_address', state='$up_state', city='$up_city', pincode='$up_pincode', email='$up_email', phone='$up_phone', web='$up_web', gst='$up_gst', features='$up_features', fields='$up_fields', status='$up_status', pic_gst='$up_gst_name', pic_pan='$up_pan_name', pic_shop='$up_shop_name', discovered_by='$up_discoveredby', distributor='$up_distributor', summary_of_visit='$up_summaryofvisit', followup='$up_followup', remarks='$up_remarks', longitude='$up_longitude', latitude='$up_latitude', isdirty='$up_isdirty' WHERE id='$current_id'";
            $query = mysqli_query($conn, $sql3);
            if ($query) {
                $_SESSION['alert_success'] = "your data Successfully Updated";
                header('location: customer-list.php');
                die();
            }else{
                $_SESSION['alert'] = "Failed to update your data";
                header('location: customer-list.php');
                ob_end_flush();
                die();
            }          
        }                                       
        
    }

?>