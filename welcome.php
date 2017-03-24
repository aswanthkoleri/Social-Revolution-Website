<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
</head>
<body>


Welcome <?php session_start();echo $_SESSION['login_user']; ?>
<br>
<a href="logout.php">logout</a>
<br>
<a href="layout.html">Make new Issue</a>

</body>
</html>