<?php
    include('../config/_dbconnect.php'); ?>
<?php 
    if (isset($_POST['submit'])) {       
        $customer = mysqli_real_escape_string($conn, $_POST['customer']);
        $head = mysqli_real_escape_string($conn, $_POST['head']);
        $invoice_no = mysqli_real_escape_string($conn, $_POST['invoice_no']);
        $challan = mysqli_real_escape_string($conn, $_POST['challan']);
        $type = mysqli_real_escape_string($conn, $_POST['type']);
        $payment_mode = mysqli_real_escape_string($conn, $_POST['payment_mode']);
        $tax = mysqli_real_escape_string($conn, $_POST['tax']);
        $duration = mysqli_real_escape_string($conn, $_POST['duration']);
        $commodity = mysqli_real_escape_string($conn, $_POST['commodity']);
        $model = mysqli_real_escape_string($conn, $_POST['model']);
        $rate = mysqli_real_escape_string($conn, $_POST['rate']);
        $qty = mysqli_real_escape_string($conn, $_POST['qty']);
        $amount = mysqli_real_escape_string($conn, $_POST['amount']);
        $tax_rate = mysqli_real_escape_string($conn, $_POST['tax_rate']);
        $total = mysqli_real_escape_string($conn, $_POST['total']);



        if (empty($customer) || empty($head) || empty($type) || empty($payment_mode) || empty($duration)) {
            $_SESSION['alert'] = "Please select all the fields with customer name !";
            header('location:sale-list.php');
            die();
        }else{

            $sql = "INSERT INTO sales SET customer='$customer', head='$head', invoice_no='$invoice_no', challan_no='$challan', type='$type', mode_payment='$payment_mode', tax='$tax', duration='$duration', commodity='$commodity', model='$model',rate='$rate', qty='$qty', amount='$amount', tax_rate='$tax_rate', total='$total'";

            $query = mysqli_query($conn, $sql);

            if ($query == true) {
                $_SESSION['alert_success'] = "your data Successfully added";
                header('location:sale-list.php');
                die();

            }else{
                $_SESSION['alert'] = "Failed to insert your data";
                header('location:sale-list.php');
                die();
            }
        }                                       
    }
?>