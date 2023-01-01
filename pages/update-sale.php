<?php
    include('../config/_dbconnect.php'); ?>
<?php 
    if (isset($_POST['update'])) {  
        $current_id = mysqli_real_escape_string($conn, $_POST['current_id']);

        $up_customer = mysqli_real_escape_string($conn, $_POST['up_customer']);
        $up_head = mysqli_real_escape_string($conn, $_POST['up_head']);
        $up_invoice_no = mysqli_real_escape_string($conn, $_POST['up_invoice_no']);
        $up_challan = mysqli_real_escape_string($conn, $_POST['up_challan']);
        $up_type = mysqli_real_escape_string($conn, $_POST['up_type']);
        $up_payment_mode = mysqli_real_escape_string($conn, $_POST['up_payment_mode']);
        $up_tax = mysqli_real_escape_string($conn, $_POST['up_tax']);
        $up_duration = mysqli_real_escape_string($conn, $_POST['up_duration']);
        $up_commodity = mysqli_real_escape_string($conn, $_POST['up_commodity']);
        $up_model = mysqli_real_escape_string($conn, $_POST['up_model']);
        $up_rate = mysqli_real_escape_string($conn, $_POST['up_rate']);
        $up_qty = mysqli_real_escape_string($conn, $_POST['up_qty']);
        $up_amount = mysqli_real_escape_string($conn, $_POST['up_amount']);
        $up_tax_rate = mysqli_real_escape_string($conn, $_POST['up_tax_rate']);
        $up_total = mysqli_real_escape_string($conn, $_POST['up_total']);


        $sql = "UPDATE sales SET customer='$up_customer', head='$up_head', invoice_no='$up_invoice_no', challan_no='$up_challan', type='$up_type', mode_payment='$up_payment_mode', tax='$up_tax', duration='$up_duration', commodity='$up_commodity', model='$up_model',rate='$up_rate', qty='$up_qty', amount='$up_amount', tax_rate='$up_tax_rate', total='$up_total' WHERE sid='$current_id'";
        $query = mysqli_query($conn, $sql);
        if ($query) {
            $_SESSION['alert_success'] = "your data Successfully Updated";
            header('location: sale-list.php');
            die();
        }else{
            $_SESSION['alert'] = "Failed to update your data";
            header('location: sale-list.php');
            die();
        }                                              
    }

?>