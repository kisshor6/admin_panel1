<?php
include('../config/_dbconnect.php'); 


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $pic_gst = $_GET['gst'];
    $pic_pan = $_GET['pan'];
    $pic_shop = $_GET['shop'];


    if ($pic_gst !="") {
        $gst_path = "../uploaded/gst/".$pic_gst;
        $gst_remove = unlink($gst_path);
        if ($gst_remove == false) {
            header("location: customer-list.php");
        }
    }

    
    if ($pic_pan !="") {
        $pan_path = "../uploaded/pan/".$pic_pan;
        $pan_remove = unlink($pan_path);
        if ($pan_remove == false) {
            header("location: customer-list.php");
        }
    }

    if ($pic_shop !="") {
        $shop_path = "../uploaded/shop/".$pic_shop;
        $shop_remove = unlink($shop_path);
        if ($shop_remove == false) {
            header("location: customer-list.php");
        }
    }


    $sql = "DELETE FROM customer WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        $_SESSION['alert_success'] = "deleted successfully";
        header("location: customer-list.php"); 

    }else{
        $_SESSION['alert'] = "Failed to delete";
        header("location: customer-list.php");
  
    }
}

?>