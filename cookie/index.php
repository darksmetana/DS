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
			<br>
			<br>
			<hr>
			<br>
		<form action="test.php" method="post">
			<input type="submit" name="age" value="Установить куку на 1 час"><br>
			<input type="submit" name="age1" value="Установить куку на 3 часа"><br>
			<input type="submit" name="age2" value="Установить куку на день"><br>
			<input type="submit" name="age3" value="Установить куку на год"><br>
			<input type="submit" name="age4" value="Установить куку на 10 лет"><br>
			<input type="submit" name="age5" value="Установить куку до конца текущего дня"><br>
			<input type="submit" name="age6" value="Установить куку до конца текущего года">
		</form>
			<br>
			<br>
			<hr>
			<br>
		<form action="test.php" method="post">
			<input type="text" name="set_name">
			<input type="submit" name="set_cookie" value="Установить куку">
			<br><br>
			<input type="text" name="edit_name">
			<input type="submit" name="edit_cookie" value="Редактировать куку">
			<br><br>
			<input type="submit" name="delete_cookies" value="Удалить куки">
		</form>
			<br>
			<br>
			<hr>
			<br>
			<?php
			session_start();
			?>
		<style>
			.wrapper {
				position: relative;
				max-width: 980px;
				padding-top: 90px;
				overflow: auto;
			}
			.product {
				float: left;
				width: 32%;
				margin-top: 15px;
			}
			.p_img {
				width: 200px;
				height: 200px;
			}
			img {
				width: 100%;
			}
			.cart {
				position: absolute;
				right: 10px;
				top: 10px;
			}
		</style>

		

	<div class="wrapper">
	<div class="cart">
		Корзина: <br>
		<?php
			echo $_POST['p_name'];
		?>
	</div>
		
		<div class="product">
			<div class="p_img"><img src="/img/p-1.jpg" alt=""></div>
			<div class="p_price"><?php echo "Цена: " . $price1; ?></div>
			<form action="index.php" method="post">
				<input type="hidden" name="p_name" value="Товар 1">Товар 1<br>
				<input type="submit" name="addcart1" value="Добавить в корзину">
			</form>
		</div>
		<div class="product">
			<div class="p_img"><img src="/img/p-2.jpg" alt=""></div>
			<div class="p_price"><?php echo "Цена: " . $price2; ?></div>
			<form action="index.php" method="post">
				<input type="hidden" name="p_name" value="Товар 2">Товар 2<br>
				<input type="submit" name="addcart2" value="Добавить в корзину">
			</form>
		</div>
		<div class="product">
			<div class="p_img"><img src="/img/p-3.jpg" alt=""></div>
			<div class="p_price"><?php echo "Цена: " . $price3; ?></div>
			<form action="index.php" method="post">
				<input type="hidden" name="p_name" value="Товар 3">Товар 3<br>
				<input type="submit" name="addcart3" value="Добавить в корзину">
			</form>
		</div>
		<div class="product">
			<div class="p_img"><img src="/img/p-4.jpg" alt=""></div>
			<div class="p_price"><?php echo "Цена: " . $price4; ?></div>
			<form action="index.php" method="post">
				<input type="hidden" name="p_name" value="Товар 4">Товар 4<br>
				<input type="submit" name="addcart4" value="Добавить в корзину">
			</form>
		</div>
		<div class="product">
			<div class="p_img"><img src="/img/p-5.jpg" alt=""></div>
			<div class="p_price"><?php echo "Цена: " . $price5; ?></div>
			<form action="index.php" method="post">
				<input type="hidden" name="p_name" value="Товар 5">Товар 5<br>
				<input type="submit" name="addcart5" value="Добавить в корзину">
			</form>
		</div>
		
	</div>
	</div>
</body>
</html>
