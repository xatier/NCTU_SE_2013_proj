<?php

function _userInfo() {
    include_once("db.php");

    $db = connect_db();

    // query user info: username / balance
}


function validate_pass($user, $password) {
    include_once("db.php");

    $db = connect_db();

    // select password from db where user=$user

    // if ($result == passwd) {
    //     return true;
    // }
    // else {
    //     return false;
    // }

}

function _changePass() {
    include_once("db.php");

    $db = connect_db();

    // update passwd
    
}

function _deposit($user, $amount) {
    include_once("db.php");

    $db = connect_db();

    // update balance += $amount

}

function _withdraw($user, $amount) {
    include_once("db.php");

    $db = connect_db();

    // update balance -= $amount

}

function _transaction($user, $to, $amount) {
    include_once("db.php");

    $db = connect_db();

    // update balance -= $amount ($user)
    // update balance += $amount ($to)

}

function checkEnough($user, $amount) {
    include_once("db.php");

    $db = connect_db();

    // select balance from db where user=$user
    //
    // if ($result >= $amount) {
    //     return true;
    // }
    // else {
    //     return false;
    // }

}
?>
