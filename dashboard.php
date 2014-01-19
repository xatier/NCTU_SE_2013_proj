<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
</head>
<body>

<?php
include_once("view.php");
?>
<?php
echo "<hr />";
userInfo();
echo "<hr />";
changePass();
echo "<hr />";
deposit();
echo "<hr />";
withdraw();
echo "<hr />";
transaction();
echo "<hr />";
logout();
?>
</body>
</html>
