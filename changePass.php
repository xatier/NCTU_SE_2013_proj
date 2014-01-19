<?php
    include_once("model.php");

    if (validate_pass($_SESSION['user'], $_POST['old_pass'])) {
        if ($_POST['new_pass'] === $_POST['confirm_pass']) {

            _changePass($_POST['new_pass']);
            // redirect to dashboard
        }
    }

    // session += error message
    // redirect to dashboard

?>
