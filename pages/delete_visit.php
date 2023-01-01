<?php
include('../config/_dbconnect.php'); 


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $picture = $_GET['picture'];


    if ($picture !="") {
        $picture_path = "../uploaded/picture/".$picture;
        $picture_remove = unlink($picture_path);
        if ($picture_remove == false) {
            header("location: visit-list.php");
            die();
        }
    }
    $sql = "DELETE FROM visit WHERE id=$id";
    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        $_SESSION['alert_success'] = "deleted successfully";
        header("location: visit-list.php"); 

    }else{
        $_SESSION['alert'] = "Failed to delete";
        header("location: visit-list.php");
  
    }
}

?>