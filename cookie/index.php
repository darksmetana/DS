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
		<br><br>
		<form action="test.php" method="post">
			<input type="submit" name="age" value="Установить куку на 1 час"><br>
			<input type="submit" name="age1" value="Установить куку на 3 часа"><br>
			<input type="submit" name="age2" value="Установить куку на день"><br>
			<input type="submit" name="age3" value="Установить куку на год"><br>
			<input type="submit" name="age4" value="Установить куку на 10 лет"><br>
			<input type="submit" name="age5" value="Установить куку до конца текущего дня"><br>
			<input type="submit" name="age6" value="Установить куку до конца текущего года">
		</form>
	</div>
</body>
</html>
