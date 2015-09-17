<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
		* {
			margin: 0 auto;
		}
		.form {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="form">
		<form action="test.php" method="post">
			Введите Вашу страну:<br>
			<input type="text" name="country" required><br>
			<input type="submit" value="Отправить">
		</form>
	</div>
</body>
</html>
