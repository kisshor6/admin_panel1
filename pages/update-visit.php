<?php
    include('../config/_dbconnect.php'); ?>
<?php 
    if (isset($_POST['update'])) {  

        $current_id = mysqli_real_escape_string($conn, $_POST['current_id']);

        $up_client = mysqli_real_escape_string($conn, $_POST['up_client']);
        $up_statusofvisit = mysqli_real_escape_string($conn, $_POST['up_statusofvisit']);
        $up_remarks = mysqli_real_escape_string($conn, $_POST['up_remarks']);
        $up_longitude = mysqli_real_escape_string($conn, $_POST['up_longitude']);
        $up_latitude = mysqli_real_escape_string($conn, $_POST['up_latitude']);

        $current_picture_img = mysqli_real_escape_string($conn, $_POST['current_picture_img']);

        
        
        // Images Updating part

        $vaild_format = array('png', 'jpg', 'jpeg');

        // GST Picture        

        if (isset($_FILES['up_picture']['name'])) {
            $up_picture_name = $_FILES['up_picture']['name'];

            if ($up_picture_name != "") {
                $up_picture_size = $_FILES['up_picture']['size'];
                $up_picture_temp = $_FILES['up_picture']['tmp_name'];

                $up_picture_split = explode(".", $up_picture_name);
                $up_picture_ext_check = strtolower(end($up_picture_split));
                $up_picture_name = time().".".$up_picture_ext_check;

                if (in_array($up_picture_ext_check, $vaild_format)) {
                    if (($up_picture_size / 1000) > 250) {
                        $_SESSION['alert'] = "file size is greater than 2 MB";
                        header('location: visit-list.php');
                        die();
                    
                    }else{

                        $up_picture_path = "../uploaded/picture/";
                        move_uploaded_file($up_picture_temp, $up_picture_path.$up_picture_name);

                        if ($current_picture_img != "") {
                            $remove_picture_path = "../uploaded/picture/".$current_picture_img;
                            $remove_picture = unlink($remove_picture_path);

                            if ($remove_picture == false) {
                                $_SESSION['alert'] = "Failed to remove GST image  !";
                                header('location: visit-list.php');
                                die();
                            }
                        }                                               
                    }                     
                }else{
                    $_SESSION['alert'] = "Only png, jpg, jpej files are allowed gst !";
                    header('location: visit-list.php');
                    die();
                }               
            }
                        
        }
        if ($up_picture_name == "") {
            $up_picture_name = $current_picture_img;
        }      

        
 
        //SHOP Picture
        // $gst_new_name = $pan_new_name = $shop_new_name = '';
        $sql = "UPDATE visit SET client='$up_client', status_of_visit='$up_statusofvisit', picture='$up_picture_name', remarks='$up_remarks', longitude='$up_longitude', latitude='$up_latitude' WHERE id='$current_id'";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            $_SESSION['alert_success'] = "your data Successfully Updated";
            header('location: visit-list.php');
            die();
        }else{
            $_SESSION['alert'] = "Failed to update your data";
            header('location: visit-list.php');
          
            die();
        }                                              
    }

?>