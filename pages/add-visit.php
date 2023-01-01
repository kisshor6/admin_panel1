<?php
    include('../config/_dbconnect.php'); ?>
<?php 
    if (isset($_POST['submit'])) {
    $client = mysqli_real_escape_string($conn, $_POST['client']);
    $statusofvisit = mysqli_real_escape_string($conn, $_POST['statusofvisit']);
    $remarks = mysqli_real_escape_string($conn, $_POST['remarks']);
    $longitude = mysqli_real_escape_string($conn, $_POST['longitude']);
    $latitude = mysqli_real_escape_string($conn, $_POST['latitude']);

    // Images Uploading part

    $vaild_format = array('png', 'jpg', 'jpeg');

    //  Picture

    if ($_FILES['picture']['name']) {
        $pic_name = $_FILES['picture']['name'];
        $pic_size = $_FILES['picture']['size'];
        $pic_temp = $_FILES['picture']['tmp_name'];

        $pic_split = explode(".", $pic_name);
        $pic_ext_check = strtolower(end($pic_split));
        $pic_new_name = time().".".$pic_ext_check;

        if (in_array($pic_ext_check, $vaild_format)) {
            if ($pic_size / 1000 > 250) {
                $_SESSION['alert'] = "File size is greater than 2 MB";
                header('location:visit.php');
                die();
            
            }else{
                $pic_path = "../uploaded/picture/";
                move_uploaded_file($pic_temp, $pic_path.$pic_new_name);
            }
        }else{
            $_SESSION['alert'] = "Only png, jpg, jpej files are allowed !";
            header('location:visit.php');
            die();
        }                      
    }

    // Picture


        $sql = "INSERT INTO visit SET client='$client', status_of_visit='$statusofvisit', picture='$pic_new_name', remarks='$remarks', longitude='$longitude', latitude='$latitude'";

        $query = mysqli_query($conn, $sql);
        if ($query == true) {
        $_SESSION['alert_success'] = "your data Successfully added";
        header('location:visit-list.php');
        die();

        }else{
            $_SESSION['alert'] = "Failed to insert your data";
            header('location:visit.php');
            die();
        }
                                              
    }
?>