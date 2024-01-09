<?php
require('db.php');
include("auth_sessionNotActiveCheck.php");
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title> Members Only - Page 1 - Secured Page</title>
</head>

<body>
  <div class="form">
    <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
    <p>This is secure area - Members Second Page.</p>
    <p><a href="membersOne.php">Members First Page</a></p>
    <a href="logout.php">Logout</a>
  </div>
</body>

</html>