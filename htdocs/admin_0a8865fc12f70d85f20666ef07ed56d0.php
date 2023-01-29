<?php
$msg = 'You are not allowed to access this page!<br/><br/>Here is a consolation: FLAG-7e990addc6d653b84e5e8218e85f0551';
if (!isset($_COOKIE['admin'])) {
    setcookie('admin', '0', time()+3600);
} else if ('1' === $_COOKIE['admin']) {
    $msg = 'Hi admin! FLAG-63afb057a5097a1c830071a509a39b82';
}
?>
<!doctype html>
<html lang="en">
<head>
  <title>Admin console</title>
</head>
<body>
  <h1><?php echo($msg); ?></h1>
</body>
</html>
