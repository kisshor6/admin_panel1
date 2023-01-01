<?php
include('../config/_dbconnect.php'); 
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM sales WHERE sid=$id";

    $res = mysqli_query($conn, $sql);
    if ($res == true) {
        $_SESSION['alert_success'] = "deleted successfully";
        header("location:sale-list.php"); 

    }else{
        $_SESSION['alert'] = "Failed to delete";
        header("location:sale-list.php");
  
    }
}

?>