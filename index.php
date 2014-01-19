<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
</head>
<body>
<?php

echo "<h1>Hi</h1>";

?>

<form method="POST" action="login.php">
  <p>
  Username: <input type="text" name="username"/><br />
  Password: <input type="password" name="passwort"/><br />
  </p>
  <p><input type="submit" value="Login" /></p>
</form>

<h2>login successful -> route to Dashboard</h2>
<a href="dashboard.php">Dashboard</a>

</body>
</html>
