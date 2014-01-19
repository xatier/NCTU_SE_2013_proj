<?
function userInfo () {
    echo "<p>";
    echo "print out all user Info<br/>";
    echo "username / balance";
    echo "</p>";
    // include_once("model.php");
    // _userInfo();
}

function changePass() {
    $out =
    "<form method=\"POST\" action=\"changePass.php\">" .
    "  <p>" .
    "  Old pass: <input type=\"password\" name=\"old_pass\"/><br />" .
    "  New password: <input type=\"password\" name=\"new_pass\"/><br />" .
    "  Confirm password: <input type=\"password\" name=\"confirm_pass\"/><br />" .
    "  </p>" .
    "  <p><input type=\"submit\" value=\"Change Password!\" /></p>" .
    "</form>";

    echo $out;

}

function deposit() {
    $out =
    "<form method=\"POST\" action=\"deposit.php\">" .
    "  <p>" .
    "  Amount: <input type=\"text\" name=\"deposit_amount\"/><br />" .
    "  Password: <input type=\"password\" name=\"password\"/><br />" .
    "  </p>" .
    "  <p><input type=\"submit\" value=\"Deposit!\" /></p>" .
    "</form>";

    echo $out;

}

function withdraw() {
    $out =
    "<form method=\"POST\" action=\"withdraw.php\">" .
    "  <p>" .
    "  Amount: <input type=\"text\" name=\"withdraw_amount\"/><br />" .
    "  Password: <input type=\"password\" name=\"password\"/><br />" .
    "  </p>" .
    "  <p><input type=\"submit\" value=\"Withdraw!\" /></p>" .
    "</form>";

    echo $out;

}

function transaction() {
    $out =
    "<form method=\"POST\" action=\"transaction.php\">" .
    "  <p>" .
    "  To: <input type=\"text\" name=\"transaction_to\"/><br />" .
    "  Amount: <input type=\"text\" name=\"transaction_amount\"/><br />" .
    "  Password: <input type=\"password\" name=\"password\"/><br />" .
    "  </p>" .
    "  <p><input type=\"submit\" value=\"Transaction!\" /></p>" .
    "</form>";

    echo $out;

}

function logout() {
    $out =
    "<form method=\"POST\" action=\"logout.php\">" .
    "  <p><input type=\"submit\" value=\"Logout!\" /></p>" .
    "</form>";

    echo $out;

}
?>
