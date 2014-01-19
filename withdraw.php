<?php
    include_once("model.php");

    if (validate_pass($_SESSION['user'], $_POST['password'])) {
        if (checkEnough($_SESSION['user'], $_POST['withdraw_amount'])) {
            _withdraw($_SESSION['user'], $_POST['withdraw_amount']);
        }
        // redirect to dashboard
    }

    // session += error message
    // redirect to dashboard

?>
