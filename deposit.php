<?php
    include_once("model.php");

    if (validate_pass($_SESSION['user'], $_POST['password'])) {
        _deposit($_SESSION['user'], $_POST['deposit_amount']);
        // redirect to dashboard
    }

?>
