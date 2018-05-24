<html>
<head>
<title>Demo Model</title>
</head>
<body>
	
<h2>Login</h2>

<form action="http://localhost/Project1.9-Login-Form/login" method="post">
<?php echo $model->labels['username']; ?></br>
<input type="text" name="username" /><br /><br />
<?php echo $model->labels['password']; ?></br />
<input type="password" name="password" /><br /><br />
<input type="submit" name="btnSubmit" value="Login" />
</form>

</body>
</html>