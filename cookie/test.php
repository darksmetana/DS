<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		* {
			margin: 0 auto;
			text-align: center;
		}
		form {
			text-align: center;
		}
	</style>
</head>
<body>
<?php 
	if (isset($_POST['country'])) {
		setcookie('country', $_POST['country']);
		header("location: test.php");
	}
	if (isset($_COOKIE['country'])) {
		echo "Ваша страна: " . $_COOKIE['country'] . '<br>';
		echo "<form action='test.php' method='post'><input type='submit' name='delete_cookie' value='Удалить куки'></form>";
		if (isset($_POST['delete_cookie'])) {
			setcookie('country', "");
			header("location: index.php");
		}
	}
?>	
</body>
</html>
