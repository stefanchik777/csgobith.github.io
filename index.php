<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php
		require 'steamauth/steamauth.php';
		loginButton();

		if(isset($_SESSION['steamid'])){
			require 'steamauth/userInfo.php';
			echo "<a href='steamauth/logout.php'>Выйти</a>";
		}
	?>
</body>
</html>