<?php
    include_once("model.php");

    if (validate_pass($_SESSION['user'], $_POST['password'])) {
        if (checkEnough($_SESSION['user'], $_POST['transaction_amount'])) {
            _transaction($_SESSION['user'], $_POST['transaction_to'], $_POST['withdraw_amount']);
        }
        // redirect to dashboard
    }

    // session += error message
    // redirect to dashboard

?>
